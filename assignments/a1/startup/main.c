/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 1, study period 2, 2020.
 *****************************************************************************/
#include <stdlib.h>
#include <assert.h>
#include <ctype.h>
#include <stdio.h>
#include <string.h>
#include "helpers.h"
#include "io.h"
#include "options.h"
void init_the_menu();
/*static void quit();*/
/*void process_menu_choice(enum menu_choice get_menu_choice);*/

int main(void) {
    /* perform the appropriate behaviour according to which option was
     * selected. Please see the assignment specifications for further
     * details */
    enum menu_choice choice;

    do {
        init_the_menu(options);
        choice = get_menu_choice();
        /* if (choice == MNU_INVALID) {
             error_output("Error Invalid option selected.");
         } else {
              process_menu_choice(choice);
         }*/

        switch (choice) {
            enum input_result another_result;
            char input[LINELEN + EXTRACHARS];
            case MNU_WD_SCR: {
                /*word_score(NULL);*/

                int score;
                another_result = get_wordscore_input(input);

                if (another_result == IR_EOF) {
                    continue;
                }
                score = word_score(input);
                normal_output("the score for \"%s\" is %d\n", input, score);
                break;
            }
            case MNU_ASC_TBL:
                /*asciitable(NULL);*/
                another_result = get_asciitable_input(input);
                if (another_result == IR_EOF) {
                    continue;
                }
                /* display the ascii table */
                asciitable(input);
                break;
            case MNU_ANAG: {
                /* prompt for the two words to compare */
                struct anagram_pair anagram_input;
                another_result = get_anagram_input(&anagram_input);
                if (another_result == IR_EOF) {
                    continue;
                }
                /* check if the words are anagrams and display the appropriate
                 * output */
                if (is_anagram(&anagram_input)) {
                    normal_output("%s and %s are anagrams.\n",
                                  anagram_input.firstword,
                                  anagram_input.secondword);
                } else {
                    normal_output("%s and %s are not anagrams.\n",
                                  anagram_input.firstword,
                                  anagram_input.secondword);
                }
                /*is_anagram(NULL);*/

                break;
            }

            case MNU_CLST: {
                /* find_clusters(NULL);*/
                BOOLEAN valid_map;
                struct map_input cluster_input;
                struct map themap;
                do {
                    /* display prompts for creating the map */
                    valid_map = FALSE;
                    another_result = get_cluster_input(&cluster_input);
                    if (another_result == IR_EOF) {
                        break;
                    }
                    /* create and validate the map */
                    themap = create_map(cluster_input.x, cluster_input.y,
                                        cluster_input.cluster_text);
                    if (!themap.isvalid) {
                        continue;
                    }
                    valid_map = TRUE;
                } while (!valid_map);
                /* double check that the input result was not EOF */
                if (another_result == IR_EOF) {
                    break;
                }
                /* display the clusters that exist in the map */
                find_clusters(&themap);
                break;
            }
            default:
                /*
                    error_output(
                        "Error: %d is not a valid menu choice. Please try
                   again",
                        get_menu_choice);*/
                if (choice != MNU_EOF && choice != MNU_QUIT) {
                    assert(choice == MNU_INVALID);
                }
        }
        normal_output("\n");
    } while (choice != MNU_EOF && choice != MNU_QUIT);

    /* for the word score, display the prompt read the word for which
     * you should will be calculating the score */
    /* for the ascii table, prompt for the phrase to display the ascii
     * table for */
    /* display the ascii table */
    /* prompt for the two words to compare */
    /* check if the words are anagrams and display the appropriate
     * output */
    /* display prompts for creating the map */
    /* create and validate the map */
    /* display the clusters that exist in the map */
    /* until the user quits */
    return EXIT_SUCCESS;
}
