<?php

/**
 * Class CategorySeeder Inserts values in categories table in database
 *
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'parent_id' => 0,
                'id' => 0,
                'code' => 'uncategorized',
                'apple_category' => 'uncategorized',
                'google_category' => 'uncategorized',
            ],
            [
                'parent_id' => 0,
                'id' => 1,
                'code' => 'arts',
                'apple_category' => 'Arts',
                'google_category' => 'Arts',
            ],
            [
                'parent_id' => 0,
                'id' => 2,
                'code' => 'business',
                'apple_category' => 'Business',
                'google_category' => 'Business',
            ],
            [
                'parent_id' => 0,
                'id' => 3,
                'code' => 'comedy',
                'apple_category' => 'Comedy',
                'google_category' => 'Comedy',
            ],
            [
                'parent_id' => 0,
                'id' => 4,
                'code' => 'education',
                'apple_category' => 'Education',
                'google_category' => 'Education',
            ],
            [
                'parent_id' => 0,
                'id' => 5,
                'code' => 'fiction',
                'apple_category' => 'Fiction',
                'google_category' => '',
            ],
            [
                'parent_id' => 0,
                'id' => 6,
                'code' => 'government',
                'apple_category' => 'Government',
                'google_category' => 'Government & Organizations',
            ],
            [
                'parent_id' => 0,
                'id' => 7,
                'code' => 'health_and_fitness',
                'apple_category' => 'Health & Fitness',
                'google_category' => 'Health',
            ],
            [
                'parent_id' => 0,
                'id' => 8,
                'code' => 'history',
                'apple_category' => 'History',
                'google_category' => '',
            ],
            [
                'parent_id' => 0,
                'id' => 9,
                'code' => 'kids_and_family',
                'apple_category' => 'Kids & Family',
                'google_category' => 'Kids & Family',
            ],
            [
                'parent_id' => 0,
                'id' => 10,
                'code' => 'leisure',
                'apple_category' => 'Leisure',
                'google_category' => 'Games & Hobbies',
            ],
            [
                'parent_id' => 0,
                'id' => 11,
                'code' => 'music',
                'apple_category' => 'Music',
                'google_category' => 'Music',
            ],
            [
                'parent_id' => 0,
                'id' => 12,
                'code' => 'news',
                'apple_category' => 'News',
                'google_category' => 'News & Politics',
            ],
            [
                'parent_id' => 0,
                'id' => 13,
                'code' => 'religion_and_spirituality',
                'apple_category' => 'Religion & Spirituality',
                'google_category' => 'Religion & Spirituality',
            ],
            [
                'parent_id' => 0,
                'id' => 14,
                'code' => 'science',
                'apple_category' => 'Science',
                'google_category' => 'Science & Medicine',
            ],
            [
                'parent_id' => 0,
                'id' => 15,
                'code' => 'society_and_culture',
                'apple_category' => 'Society & Culture',
                'google_category' => 'Society & Culture',
            ],
            [
                'parent_id' => 0,
                'id' => 16,
                'code' => 'sports',
                'apple_category' => 'Sports',
                'google_category' => 'Sports & Recreation',
            ],
            [
                'parent_id' => 0,
                'id' => 17,
                'code' => 'technology',
                'apple_category' => 'Technology',
                'google_category' => 'Technology',
            ],
            [
                'parent_id' => 0,
                'id' => 18,
                'code' => 'true_crime',
                'apple_category' => 'True Crime',
                'google_category' => '',
            ],
            [
                'parent_id' => 0,
                'id' => 19,
                'code' => 'tv_and_film',
                'apple_category' => 'TV & Film',
                'google_category' => 'TV & Film',
            ],
            [
                'parent_id' => 1,
                'id' => 20,
                'code' => 'books',
                'apple_category' => 'Books',
                'google_category' => '',
            ],
            [
                'parent_id' => 1,
                'id' => 21,
                'code' => 'design',
                'apple_category' => 'Design',
                'google_category' => '',
            ],
            [
                'parent_id' => 1,
                'id' => 22,
                'code' => 'fashion_and_beauty',
                'apple_category' => 'Fashion & Beauty',
                'google_category' => '',
            ],
            [
                'parent_id' => 1,
                'id' => 23,
                'code' => 'food',
                'apple_category' => 'Food',
                'google_category' => '',
            ],
            [
                'parent_id' => 1,
                'id' => 24,
                'code' => 'performing_arts',
                'apple_category' => 'Performing Arts',
                'google_category' => '',
            ],
            [
                'parent_id' => 1,
                'id' => 25,
                'code' => 'visual_arts',
                'apple_category' => 'Visual Arts',
                'google_category' => '',
            ],
            [
                'parent_id' => 2,
                'id' => 26,
                'code' => 'careers',
                'apple_category' => 'Careers',
                'google_category' => '',
            ],
            [
                'parent_id' => 2,
                'id' => 27,
                'code' => 'entrepreneurship',
                'apple_category' => 'Entrepreneurship',
                'google_category' => '',
            ],
            [
                'parent_id' => 2,
                'id' => 28,
                'code' => 'investing',
                'apple_category' => 'Investing',
                'google_category' => '',
            ],
            [
                'parent_id' => 2,
                'id' => 29,
                'code' => 'management',
                'apple_category' => 'Management',
                'google_category' => '',
            ],
            [
                'parent_id' => 2,
                'id' => 30,
                'code' => 'marketing',
                'apple_category' => 'Marketing',
                'google_category' => '',
            ],
            [
                'parent_id' => 2,
                'id' => 31,
                'code' => 'non_profit',
                'apple_category' => 'Non-Profit',
                'google_category' => '',
            ],
            [
                'parent_id' => 3,
                'id' => 32,
                'code' => 'comedy_interviews',
                'apple_category' => 'Comedy Interviews',
                'google_category' => '',
            ],
            [
                'parent_id' => 3,
                'id' => 33,
                'code' => 'improv',
                'apple_category' => 'Improv',
                'google_category' => '',
            ],
            [
                'parent_id' => 3,
                'id' => 34,
                'code' => 'stand_up',
                'apple_category' => 'Stand-Up',
                'google_category' => '',
            ],
            [
                'parent_id' => 4,
                'id' => 35,
                'code' => 'courses',
                'apple_category' => 'Courses',
                'google_category' => '',
            ],
            [
                'parent_id' => 4,
                'id' => 36,
                'code' => 'how_to',
                'apple_category' => 'How To',
                'google_category' => '',
            ],
            [
                'parent_id' => 4,
                'id' => 37,
                'code' => 'language_learning',
                'apple_category' => 'Language Learning',
                'google_category' => '',
            ],
            [
                'parent_id' => 4,
                'id' => 38,
                'code' => 'self_improvement',
                'apple_category' => 'Self-Improvement',
                'google_category' => '',
            ],
            [
                'parent_id' => 5,
                'id' => 39,
                'code' => 'comedy_fiction',
                'apple_category' => 'Comedy Fiction',
                'google_category' => '',
            ],
            [
                'parent_id' => 5,
                'id' => 40,
                'code' => 'drama',
                'apple_category' => 'Drama',
                'google_category' => '',
            ],
            [
                'parent_id' => 5,
                'id' => 41,
                'code' => 'science_fiction',
                'apple_category' => 'Science Fiction',
                'google_category' => '',
            ],
            [
                'parent_id' => 7,
                'id' => 42,
                'code' => 'alternative_health',
                'apple_category' => 'Alternative Health',
                'google_category' => '',
            ],
            [
                'parent_id' => 7,
                'id' => 43,
                'code' => 'fitness',
                'apple_category' => 'Fitness',
                'google_category' => '',
            ],
            [
                'parent_id' => 7,
                'id' => 44,
                'code' => 'medicine',
                'apple_category' => 'Medicine',
                'google_category' => '',
            ],
            [
                'parent_id' => 7,
                'id' => 45,
                'code' => 'mental_health',
                'apple_category' => 'Mental Health',
                'google_category' => '',
            ],
            [
                'parent_id' => 7,
                'id' => 46,
                'code' => 'nutrition',
                'apple_category' => 'Nutrition',
                'google_category' => '',
            ],
            [
                'parent_id' => 7,
                'id' => 47,
                'code' => 'sexuality',
                'apple_category' => 'Sexuality',
                'google_category' => '',
            ],
            [
                'parent_id' => 9,
                'id' => 48,
                'code' => 'education_for_kids',
                'apple_category' => 'Education for Kids',
                'google_category' => '',
            ],
            [
                'parent_id' => 9,
                'id' => 49,
                'code' => 'parenting',
                'apple_category' => 'Parenting',
                'google_category' => '',
            ],
            [
                'parent_id' => 9,
                'id' => 50,
                'code' => 'pets_and_animals',
                'apple_category' => 'Pets & Animals',
                'google_category' => '',
            ],
            [
                'parent_id' => 9,
                'id' => 51,
                'code' => 'stories_for_kids',
                'apple_category' => 'Stories for Kids',
                'google_category' => '',
            ],
            [
                'parent_id' => 10,
                'id' => 52,
                'code' => 'animation_and_manga',
                'apple_category' => 'Animation & Manga',
                'google_category' => '',
            ],
            [
                'parent_id' => 10,
                'id' => 53,
                'code' => 'automotive',
                'apple_category' => 'Automotive',
                'google_category' => '',
            ],
            [
                'parent_id' => 10,
                'id' => 54,
                'code' => 'aviation',
                'apple_category' => 'Aviation',
                'google_category' => '',
            ],
            [
                'parent_id' => 10,
                'id' => 55,
                'code' => 'crafts',
                'apple_category' => 'Crafts',
                'google_category' => '',
            ],
            [
                'parent_id' => 10,
                'id' => 56,
                'code' => 'games',
                'apple_category' => 'Games',
                'google_category' => '',
            ],
            [
                'parent_id' => 10,
                'id' => 57,
                'code' => 'hobbies',
                'apple_category' => 'Hobbies',
                'google_category' => '',
            ],
            [
                'parent_id' => 10,
                'id' => 58,
                'code' => 'home_and_garden',
                'apple_category' => 'Home & Garden',
                'google_category' => '',
            ],
            [
                'parent_id' => 10,
                'id' => 59,
                'code' => 'video_games',
                'apple_category' => 'Video Games',
                'google_category' => '',
            ],
            [
                'parent_id' => 11,
                'id' => 60,
                'code' => 'music_commentary',
                'apple_category' => 'Music Commentary',
                'google_category' => '',
            ],
            [
                'parent_id' => 11,
                'id' => 61,
                'code' => 'music_history',
                'apple_category' => 'Music History',
                'google_category' => '',
            ],
            [
                'parent_id' => 11,
                'id' => 62,
                'code' => 'music_interviews',
                'apple_category' => 'Music Interviews',
                'google_category' => '',
            ],
            [
                'parent_id' => 12,
                'id' => 63,
                'code' => 'business_news',
                'apple_category' => 'Business News',
                'google_category' => '',
            ],
            [
                'parent_id' => 12,
                'id' => 64,
                'code' => 'daily_news',
                'apple_category' => 'Daily News',
                'google_category' => '',
            ],
            [
                'parent_id' => 12,
                'id' => 65,
                'code' => 'entertainment_news',
                'apple_category' => 'Entertainment News',
                'google_category' => '',
            ],
            [
                'parent_id' => 12,
                'id' => 66,
                'code' => 'news_commentary',
                'apple_category' => 'News Commentary',
                'google_category' => '',
            ],
            [
                'parent_id' => 12,
                'id' => 67,
                'code' => 'politics',
                'apple_category' => 'Politics',
                'google_category' => '',
            ],
            [
                'parent_id' => 12,
                'id' => 68,
                'code' => 'sports_news',
                'apple_category' => 'Sports News',
                'google_category' => '',
            ],
            [
                'parent_id' => 12,
                'id' => 69,
                'code' => 'tech_news',
                'apple_category' => 'Tech News',
                'google_category' => '',
            ],
            [
                'parent_id' => 13,
                'id' => 70,
                'code' => 'buddhism',
                'apple_category' => 'Buddhism',
                'google_category' => '',
            ],
            [
                'parent_id' => 13,
                'id' => 71,
                'code' => 'christianity',
                'apple_category' => 'Christianity',
                'google_category' => '',
            ],
            [
                'parent_id' => 13,
                'id' => 72,
                'code' => 'hinduism',
                'apple_category' => 'Hinduism',
                'google_category' => '',
            ],
            [
                'parent_id' => 13,
                'id' => 73,
                'code' => 'islam',
                'apple_category' => 'Islam',
                'google_category' => '',
            ],
            [
                'parent_id' => 13,
                'id' => 74,
                'code' => 'judaism',
                'apple_category' => 'Judaism',
                'google_category' => '',
            ],
            [
                'parent_id' => 13,
                'id' => 75,
                'code' => 'religion',
                'apple_category' => 'Religion',
                'google_category' => '',
            ],
            [
                'parent_id' => 13,
                'id' => 76,
                'code' => 'spirituality',
                'apple_category' => 'Spirituality',
                'google_category' => '',
            ],
            [
                'parent_id' => 14,
                'id' => 77,
                'code' => 'astronomy',
                'apple_category' => 'Astronomy',
                'google_category' => '',
            ],
            [
                'parent_id' => 14,
                'id' => 78,
                'code' => 'chemistry',
                'apple_category' => 'Chemistry',
                'google_category' => '',
            ],
            [
                'parent_id' => 14,
                'id' => 79,
                'code' => 'earth_sciences',
                'apple_category' => 'Earth Sciences',
                'google_category' => '',
            ],
            [
                'parent_id' => 14,
                'id' => 80,
                'code' => 'life_sciences',
                'apple_category' => 'Life Sciences',
                'google_category' => '',
            ],
            [
                'parent_id' => 14,
                'id' => 81,
                'code' => 'mathematics',
                'apple_category' => 'Mathematics',
                'google_category' => '',
            ],
            [
                'parent_id' => 14,
                'id' => 82,
                'code' => 'natural_sciences',
                'apple_category' => 'Natural Sciences',
                'google_category' => '',
            ],
            [
                'parent_id' => 14,
                'id' => 83,
                'code' => 'nature',
                'apple_category' => 'Nature',
                'google_category' => '',
            ],
            [
                'parent_id' => 14,
                'id' => 84,
                'code' => 'physics',
                'apple_category' => 'Physics',
                'google_category' => '',
            ],
            [
                'parent_id' => 14,
                'id' => 85,
                'code' => 'social_sciences',
                'apple_category' => 'Social Sciences',
                'google_category' => '',
            ],
            [
                'parent_id' => 15,
                'id' => 86,
                'code' => 'documentary',
                'apple_category' => 'Documentary',
                'google_category' => '',
            ],
            [
                'parent_id' => 15,
                'id' => 87,
                'code' => 'personal_journals',
                'apple_category' => 'Personal Journals',
                'google_category' => '',
            ],
            [
                'parent_id' => 15,
                'id' => 88,
                'code' => 'philosophy',
                'apple_category' => 'Philosophy',
                'google_category' => '',
            ],
            [
                'parent_id' => 15,
                'id' => 89,
                'code' => 'places_and_travel',
                'apple_category' => 'Places & Travel',
                'google_category' => '',
            ],
            [
                'parent_id' => 15,
                'id' => 90,
                'code' => 'relationships',
                'apple_category' => 'Relationships',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 91,
                'code' => 'baseball',
                'apple_category' => 'Baseball',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 92,
                'code' => 'basketball',
                'apple_category' => 'Basketball',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 93,
                'code' => 'cricket',
                'apple_category' => 'Cricket',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 94,
                'code' => 'fantasy_sports',
                'apple_category' => 'Fantasy Sports',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 95,
                'code' => 'football',
                'apple_category' => 'Football',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 96,
                'code' => 'golf',
                'apple_category' => 'Golf',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 97,
                'code' => 'hockey',
                'apple_category' => 'Hockey',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 98,
                'code' => 'rugby',
                'apple_category' => 'Rugby',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 99,
                'code' => 'running',
                'apple_category' => 'Running',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 100,
                'code' => 'soccer',
                'apple_category' => 'Soccer',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 101,
                'code' => 'swimming',
                'apple_category' => 'Swimming',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 102,
                'code' => 'tennis',
                'apple_category' => 'Tennis',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 103,
                'code' => 'volleyball',
                'apple_category' => 'Volleyball',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 104,
                'code' => 'wilderness',
                'apple_category' => 'Wilderness',
                'google_category' => '',
            ],
            [
                'parent_id' => 16,
                'id' => 105,
                'code' => 'wrestling',
                'apple_category' => 'Wrestling',
                'google_category' => '',
            ],
            [
                'parent_id' => 19,
                'id' => 106,
                'code' => 'after_shows',
                'apple_category' => 'After Shows',
                'google_category' => '',
            ],
            [
                'parent_id' => 19,
                'id' => 107,
                'code' => 'film_history',
                'apple_category' => 'Film History',
                'google_category' => '',
            ],
            [
                'parent_id' => 19,
                'id' => 108,
                'code' => 'film_interviews',
                'apple_category' => 'Film Interviews',
                'google_category' => '',
            ],
            [
                'parent_id' => 19,
                'id' => 109,
                'code' => 'film_reviews',
                'apple_category' => 'Film Reviews',
                'google_category' => '',
            ],
            [
                'parent_id' => 19,
                'id' => 110,
                'code' => 'tv_reviews',
                'apple_category' => 'TV Reviews',
                'google_category' => '',
            ],
        ];

        $this->db
            ->table('categories')
            ->ignore(true)
            ->insertBatch($data);
    }
}
