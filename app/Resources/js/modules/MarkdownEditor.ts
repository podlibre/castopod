import { exampleSetup } from "prosemirror-example-setup";
import "prosemirror-example-setup/style/style.css";
import {
  defaultMarkdownParser,
  defaultMarkdownSerializer,
  schema,
} from "prosemirror-markdown";
import "prosemirror-menu/style/menu.css";
import { EditorState } from "prosemirror-state";
import { EditorView } from "prosemirror-view";
import "prosemirror-view/style/prosemirror.css";

class MarkdownView {
  textarea: HTMLTextAreaElement;

  constructor(target: HTMLTextAreaElement) {
    this.textarea = target;
    this.textarea.classList.add("w-full", "h-full");
  }

  content() {
    return this.textarea.innerHTML;
  }
  focus() {
    this.textarea.focus();
  }
  show() {
    this.textarea.classList.remove("hidden");
  }
  hide() {
    this.textarea.classList.add("hidden");
  }
}

class ProseMirrorView {
  editorContainer: HTMLDivElement;
  view: EditorView;

  constructor(target: HTMLTextAreaElement, content: string) {
    this.editorContainer = document.createElement("div");
    this.editorContainer.classList.add("bg-white", "border");
    this.editorContainer.style.minHeight = "200px";
    const editor = target.parentNode?.insertBefore(
      this.editorContainer,
      target.nextSibling
    );

    this.view = new EditorView(editor, {
      state: EditorState.create({
        doc: defaultMarkdownParser.parse(content),
        plugins: exampleSetup({ schema }),
      }),
      dispatchTransaction: (transaction) => {
        const newState = this.view.state.apply(transaction);
        this.view.updateState(newState);

        if (transaction.docChanged) {
          target.innerHTML = this.content();
        }
      },
      attributes: {
        class: "prose-sm px-3 py-2 overflow-y-auto focus:ring",
        style: "min-height: 200px; max-height: 500px",
      },
    });
  }

  content(): string {
    return defaultMarkdownSerializer.serialize(this.view.state.doc) || "";
  }
  focus() {
    this.view.focus();
  }
  show() {
    this.editorContainer.classList.remove("hidden");
  }
  hide() {
    this.editorContainer.classList.add("hidden");
  }
}

const MarkdownEditor = (): void => {
  const targets: NodeListOf<HTMLTextAreaElement> = document.querySelectorAll(
    "textarea[data-editor='markdown']"
  );
  const activeClass = "font-semibold";

  for (let i = 0; i < targets.length; i++) {
    const target = targets[i];

    const wysiwygBtn = document.createElement("button");
    wysiwygBtn.classList.add(
      activeClass,
      "py-1",
      "px-2",
      "bg-white",
      "border",
      "text-xs",
      "outline-none",
      "focus:ring"
    );
    wysiwygBtn.setAttribute("type", "button");
    wysiwygBtn.innerHTML = "Wysiwyg";
    const markdownBtn = document.createElement("button");
    markdownBtn.classList.add(
      "py-1",
      "px-2",
      "bg-white",
      "border",
      "text-xs",
      "outline-none",
      "focus:ring"
    );
    markdownBtn.setAttribute("type", "button");
    markdownBtn.innerHTML = "Markdown";

    const viewButtons = document.createElement("div");
    viewButtons.appendChild(wysiwygBtn);
    viewButtons.appendChild(markdownBtn);
    viewButtons.classList.add(
      "inline-flex",
      "absolute",
      "top-0",
      "right-0",
      "-mt-6"
    );

    const markdownEditorContainer = document.createElement("div");
    markdownEditorContainer.classList.add("relative");
    markdownEditorContainer.style.minHeight = "200px";
    target.parentNode?.appendChild(markdownEditorContainer);
    markdownEditorContainer.appendChild(target);

    // show WYSIWYG editor by default
    target.classList.add("hidden");
    const markdownView = new MarkdownView(target);
    const wysiwygView = new ProseMirrorView(target, markdownView.content());

    markdownEditorContainer.appendChild(viewButtons);

    markdownBtn.addEventListener("click", () => {
      if (markdownBtn.classList.contains(activeClass)) return;
      markdownBtn.classList.add(activeClass);
      wysiwygBtn.classList.remove(activeClass);
      wysiwygView.hide();
      markdownView.show();
    });

    wysiwygBtn.addEventListener("click", () => {
      if (wysiwygBtn.classList.contains(activeClass)) return;
      wysiwygBtn.classList.add(activeClass);
      markdownBtn.classList.remove(activeClass);
      markdownView.hide();
      wysiwygView.show();
    });
  }
};

export default MarkdownEditor;
