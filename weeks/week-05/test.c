#include <ctype.h>
#include <limits.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "io.h"

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

static void clear_buffer();

int main (void){
BOOLEAN success = FALSE;
    int input;
    char* end;
    enum input_result result;
    char line[SCREENWIDTH];

    /*do while to manage buffer overflow*/
    do {

        printf("Please enter your choice: ");
        /*read in the line*/
        fgets(line, SCREENWIDTH + MAXIMUMM_NUMBER_OF_CHARACTERS, stdin);
        /*test for buffer overflow-of present manage with the famous function*/
        if (line[strlen(line) - 1] != '\n') {
            printf("Buffer overflow!\n");
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
        printf("Error: the given character(s) were not numeric.\n\n");
        return IR_FAILURE;
    }

    /*error handling for numbers that are too large or small*/
    if (input < MIN_NUM_MENU_CHOICES) {
        printf(
            "Error: %d is smaller than the boundary. Please enter a number "
            "between %d and %d.\n",
            input, MIN_NUM_MENU_CHOICES, NUM_MENU_CHOICES);
        return IR_FAILURE;
    } else if (input > 5) {
        printf(
            "Error: %d is larger than the boundary. Please enter a number "
            "between %d and %d.\n",
            input, MIN_NUM_MENU_CHOICES, NUM_MENU_CHOICES);
        return IR_FAILURE;
    } else {
        printf("It is: %d\n", input);
    }

    /* normal_output("It is: %d\n", result);*/
    /*setup to utilise the provided enum*/
    result = printf("\n You entered: %d \n", input);

    if (result == IR_FAILURE) {
        printf("Option could not be run successfully");
        return EXIT_FAILURE;
    }
    /*normal_output("It is: %d\n", result);*/
    return EXIT_SUCCESS;
}

static void clear_buffer(void) {
    int ch;
    while (ch = getc(stdin), ch != '\n' && ch != EOF)
        ;
    clearerr(stdin);
}


