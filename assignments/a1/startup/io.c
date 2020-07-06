/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 1, study period 2, 2020.
 *****************************************************************************/
#include "io.h"
#include "options.h"

#include <ctype.h>
#include <limits.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

/**
 * this module is the place to implement all i/o functionality. You should not
 * call printf/fprintf, etc, outside this module as that will make it simpler
 * if we ever want to change the target for output for the program.
 **/

/*the number of choices in the program*/
#define NUM_MENU_CHOICES 5

/*the minimum number of choices in the program*/
#define MIN_NUM_MENU_CHOICES 1
/*Because one cannot just give the number*/
#define MAXIMUMM_NUMBER_OF_CHARACTERS 2

/*custom constants*/
#define SCREENWIDTH 80

/*functions used in the program*/
static void clear_buffer();
BOOLEAN success = FALSE;

/**
* function provided to clear the input buffer whenever you detect buffer
* overflow. It just reads the leftover bytes and throws them away, resetting
* the error state
**/

static void clear_buffer(void) {
    int ch;
    while (ch = getc(stdin), ch != '\n' && ch != EOF)
        ;
    clearerr(stdin);
}

/**
 * display the menu and then get the choice from the user. Please note that
 * you should implement this in such a way that it is easy to maintain and
 * extend. Hardcoding the menu output here will get you a maximum of half the
 * marks.
 **/
char* heading;
int count;
int strlen_heading;
int i;
int j;

/*
struct menu {
    char selection[NUM_MENU_CHOICES];
} options;
*/
void take();
/*int** arrayspace;*/
void init_the_menu() {

    /*An attempt to simplify entering the text for the menu, unfortunately it
     * didn't copy*/
    /*char array containing the contents*/
    /*char menu_list[NUM_MENU_CHOICES][SCREENWIDTH] = {
        "word scrore",   "ascii table", "check if two words are anagrams",
        "find clusters", "quit"};
    for (i = 0; i < NUM_MENU_CHOICES; i++) {
        normal_output("This: %s\n", menu_list[i]);

        arrayspace = malloc(sizeof(int) * SCREENWIDTH);
        for (count = 0; count < NUM_MENU_CHOICES; ++count) {
            arrayspace[count] = malloc(sizeof(int) * NUM_MENU_CHOICES);
        }
        strcpy(arrayspace, menu_list[i]);
                options.selection = arrayspace;
                strcpy(options.selection, menu_list[i]);};*/

    /*far clunkier one by one option*/
    struct menu option_one;
    struct menu option_two;
    struct menu option_three;
    struct menu option_four;
    struct menu option_five;

    strcpy(option_one.selection, "word scrore");
    strcpy(option_two.selection, "ascii table");
    strcpy(option_three.selection, "check if two words are anagrams");
    strcpy(option_four.selection, "find clusters");
    strcpy(option_five.selection, "quit");

    normal_output("Four is: %s\n", &option_four);
    /*incorrect loop here*/
    normal_output("These are: %s\n", options.selection);
    /*the heading*/
    heading = "Welcome to the CPT220 menu system";
    strlen_heading = strlen(heading);

    puts(heading);
    for (count = 0; count < strlen_heading; ++count) {
        normal_output("%s", "=");
    }
    /*the display of the menu*/
    normal_output("\n");
    for (count = 0; count < NUM_MENU_CHOICES; ++count) {
        normal_output("% d) % s\n ", count + 1, options.selection[i]);
    }
    normal_output("Please enter your choice: ");
}

void print(struct menu options) {
    normal_output("Hello\n");
    normal_output("These are: %s\n", options.selection);
}

/*the enum to gather user input*/
enum menu_choice get_menu_choice(void) {
    BOOLEAN success = FALSE;
    int input;
    char* end;
    enum input_result result;
    char line[SCREENWIDTH];

    /*do while to manage buffer overflow*/
    do {

        /*       normal_output("Please enter your choice: ");*/
        /*read in the line*/
        fgets(line, SCREENWIDTH + MAXIMUMM_NUMBER_OF_CHARACTERS, stdin);
        /*test for buffer overflow-of present manage with the famous function*/
        if (line[strlen(line) - 1] != '\n') {
            error_output("Buffer overflow!\n");
            clear_buffer();
            continue;
        }
        success = TRUE;
    } while (success == FALSE);
    /*remove trailing newline*/
    line[strlen(line) - 1] = 0;
    /*conversition of the input string to an integer*/
    input = strtol(line, &end, 10);
    /*ensure input is a number*/
    if (*end != '\0') {
        error_output("Error: the given character(s) were not numeric.\n\n");
        return IR_FAILURE;
    }

    /*error handling for numbers that are too large or small*/
    if (input < MIN_NUM_MENU_CHOICES) {
        error_output(
            "Error: %d is smaller than the boundary. Please enter a number "
            "between %d and %d.\n",
            input, MIN_NUM_MENU_CHOICES, NUM_MENU_CHOICES);
        return IR_FAILURE;
    } else if (input > 5) {
        error_output(
            "Error: %d is larger than the boundary. Please enter a number "
            "between %d and %d.\n",
            input, MIN_NUM_MENU_CHOICES, NUM_MENU_CHOICES);
        return IR_FAILURE;
    } else {
        normal_output("It is: %d\n", input);
    }

    /* normal_output("It is: %d\n", result);*/
    /*setup to utilise the provided enum*/
    result = normal_output("\n You entered: %d \n", input);

    if (result == IR_FAILURE) {
        error_output("Option could not be run successfully");
        return result;
    }
    /* normal_output("It is: %d\n", result);*/
    return IR_SUCCESS;
}

/*REMEMBER TO ENTER HANDLING FOR NON NUMERIC DATA*/
/*Alt message: Error: int is not a valid menu choice. Please try again*/

/*extensive function to permit quitting*/
static void quit() {}

/*A switch to proecess the menu input. Note that the switch itself doesn't
 * return anything*/
void process_menu_choice(enum menu_choice get_menu_choice) {
    switch (get_menu_choice) {
        case MNU_WD_SCR:
            word_score(NULL);
            break;
        case MNU_ASC_TBL:
            asciitable(NULL);
            EOF;
            break;
        case MNU_ANAG:
            is_anagram(NULL);
            break;
        case MNU_CLST:
            find_clusters(NULL);
            break;
        case MNU_QUIT:
            quit();
            break;
        case MNU_EOF:
            EOF;
            break;
        default:
            error_output(
                "Error: %d is not a valid menu choice. Please try again",
                get_menu_choice);
    }
}

/**
 * prints out normal output to stdout - you call this function EXACTLY like
 * you call printf. There is no difference in its use.
 **/
int normal_output(const char format[], ...) {
    int count = 0;
    va_list vlist;
    va_start(vlist, format);
    count += vprintf(format, vlist);
    va_end(vlist);
    return count;
}

/**
 * use this function to print out errors. We will test that you are doing
 *separate output to stderr for errors.
 **/
int error_output(const char format[], ...) {
    int count = 0;
    va_list vlist;
    va_start(vlist, format);
    count += fprintf(stderr, "Error: ");
    count += vfprintf(stderr, format, vlist);
    va_end(vlist);
    return count;
}
