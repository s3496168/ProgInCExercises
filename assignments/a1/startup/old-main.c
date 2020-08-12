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
void process_menu_choice(enum menu_choice get_menu_choice);
enum menu_choice choice;


int main(void) {
    /* perform the appropriate behaviour according to which option was
     * selected. Please see the assignment specifications for further
     * details */

    do {
        init_the_menu(options);
        choice = get_menu_choice();
        if (choice == MNU_INVALID) {
            error_output("Error Invalid option selected.");
        } else {
             process_menu_choice(choice); 
        }
         
    } while (choice != MNU_EOF || choice != MNU_QUIT);

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
