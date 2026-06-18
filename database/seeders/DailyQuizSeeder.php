<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DailyQuizQuestion;
use Carbon\Carbon;

class DailyQuizSeeder extends Seeder
{
    public function run(): void
    {
        $questions = [
            [
                'offset' => -3,
                'question_text' => 'Which programming language is primarily used for iOS app development by Apple?',
                'option_a' => 'Kotlin',
                'option_b' => 'Swift',
                'option_c' => 'Java',
                'option_d' => 'Dart',
                'correct_option' => 'b',
                'explanation' => 'Swift is Apple\'s proprietary language developed specifically for iOS, macOS, watchOS, and tvOS applications, replacing Objective-C.',
                'category' => 'technology',
                'difficulty' => 'easy',
                'points' => 10,
            ],
            [
                'offset' => -2,
                'question_text' => 'In financial accounting, what does the abbreviation "GAAP" stand for?',
                'option_a' => 'General Association of Asset Planners',
                'option_b' => 'Government Auditing and Account Practices',
                'option_c' => 'Generally Accepted Accounting Principles',
                'option_d' => 'Global Asset Allocation Policies',
                'correct_option' => 'c',
                'explanation' => 'GAAP stands for Generally Accepted Accounting Principles. It is a common set of accounting principles, standards, and procedures issued by the Financial Accounting Standards Board (FASB).',
                'category' => 'commerce',
                'difficulty' => 'medium',
                'points' => 15,
            ],
            [
                'offset' => -1,
                'question_text' => 'Which branch of engineering is primarily focused on the design, construction, and operation of aircraft and spacecraft?',
                'option_a' => 'Civil Engineering',
                'option_b' => 'Mechanical Engineering',
                'option_c' => 'Aerospace Engineering',
                'option_d' => 'Metallurgical Engineering',
                'correct_option' => 'c',
                'explanation' => 'Aerospace engineering is the primary field of engineering concerned with the development of aircraft and spacecraft. It has two major and overlapping branches: aeronautical engineering and astronautical engineering.',
                'category' => 'engineering',
                'difficulty' => 'easy',
                'points' => 10,
            ],
            [
                'offset' => 0, // Today's question!
                'question_text' => 'What is the primary responsibility of a Scrum Master in an Agile software development team?',
                'option_a' => 'Writing the source code and developing features',
                'option_b' => 'Managing budget, hiring developers, and signing contracts',
                'option_c' => 'Facilitating the agile process, removing blockers, and coaching the team',
                'option_d' => 'Designing user interfaces and creating wireframes',
                'correct_option' => 'c',
                'explanation' => 'A Scrum Master is a facilitator for an agile development team. They are responsible for managing the scrum framework, resolving obstacles/impediments, and helping the team perform at their highest level.',
                'category' => 'technology',
                'difficulty' => 'medium',
                'points' => 10,
            ],
            [
                'offset' => 1,
                'question_text' => 'Which of the following art terms describes a painting technique that uses thick, textured paint where the brush or palette knife strokes are clearly visible?',
                'option_a' => 'Sfumato',
                'option_b' => 'Impasto',
                'option_c' => 'Chiaroscuro',
                'option_d' => 'Fresco',
                'correct_option' => 'b',
                'explanation' => 'Impasto is a technique used in painting, where paint is laid on an area of the surface in very thick layers, usually thick enough that the brush or painting-knife strokes are visible.',
                'category' => 'arts',
                'difficulty' => 'hard',
                'points' => 20,
            ],
            [
                'offset' => 2,
                'question_text' => 'In biotechnology and molecular biology, what does the acronym "CRISPR" refer to?',
                'option_a' => 'A method for fast protein sequencing',
                'option_b' => 'A revolutionary gene-editing technology',
                'option_c' => 'A chemical reagent for cell staining',
                'option_d' => 'An imaging technique for neural connections',
                'correct_option' => 'b',
                'explanation' => 'CRISPR (Clustered Regularly Interspaced Short Palindromic Repeats) is a powerful, highly precise tool used in gene editing, allowing scientists to alter DNA sequences and modify gene function.',
                'category' => 'science',
                'difficulty' => 'medium',
                'points' => 15,
            ],
            [
                'offset' => 3,
                'question_text' => 'In product design and UX research, what does "A/B testing" refer to?',
                'option_a' => 'Testing two versions of a webpage or app screen to see which performs better',
                'option_b' => 'Comparing the speed performance of two databases',
                'option_c' => 'A hiring test where candidate A and B compete on a coding test',
                'option_d' => 'An automated security scan for public APIs',
                'correct_option' => 'a',
                'explanation' => 'A/B testing is a user experience research methodology. It consists of a randomized experiment with two variants, A and B, to compare user engagement, conversion rates, or other metrics.',
                'category' => 'general',
                'difficulty' => 'easy',
                'points' => 10,
            ],
        ];

        foreach ($questions as $q) {
            $quizDate = Carbon::today()->addDays($q['offset'])->toDateString();

            DailyQuizQuestion::updateOrCreate(
                ['quiz_date' => $quizDate],
                [
                    'question_text' => $q['question_text'],
                    'option_a' => $q['option_a'],
                    'option_b' => $q['option_b'],
                    'option_c' => $q['option_c'],
                    'option_d' => $q['option_d'],
                    'correct_option' => $q['correct_option'],
                    'explanation' => $q['explanation'],
                    'category' => $q['category'],
                    'difficulty' => $q['difficulty'],
                    'points' => $q['points'],
                    'is_active' => true,
                ]
            );
        }
    }
}
