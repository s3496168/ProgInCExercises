/*#include "io.h"
#include "options.h"*/

#include <ctype.h>
#include <limits.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "puzzle.h"

#define NUM_MENU_CHOICES 5
#define MIN_NUM_MENU_CHOICES 1
#define MAXIMUMM_NUMBER_OF_CHARACTERS 2
#define SCREENWIDTH 80
#define PROMPTLEN 30

static void clear_buffer();


enum menu_choice choice;


int main (void){

    choice = get_menu_choice();
    return 0;
}

enum input_result string_from_keyboard(const char prompt[], char output[],
                                       long len) {
enum input_result menu_result;
    BOOLEAN success = FALSE;
   /* long * plen;*/
    /*long ** pplen;*/

    /*do while to manage buffer overflow*/
    do {
 normal_output("%s", prompt);
 
        /*read in the line*/
        fgets(output, len, stdin);
        /*test for buffer overflow-of present manage with the famous
         * function*/
         
   
            if (output[strlen(output)+1] == '\0'){
                normal_output("\n");
            return MNU_EOF;
            }

         if (output[strlen(output) - 1] != '\n') {
            error_output("Buffer overflow!\n");
            clear_buffer();
            continue;
        }

    
        success = TRUE;
       
    } while (success == FALSE);

    /*remove trailing newline*/
    output[strlen(output) - 1] = 0;
  /*  plen =  &len; */
/*pplen = &plen;*/

   if (output == IR_FAILURE) {
        error_output("Option could not be run successfully\n");
        return MNU_INVALID;
    }

   menu_result=4;
   normal_output("%d, Early: ",output);
  /*menu_result= long_from_keyboard(output,plen);*/
    return menu_result;
    
}

static void clear_buffer(void) {
    int ch;
    while (ch = getc(stdin), ch != '\n' && ch != EOF)
        ;
    clearerr(stdin);
}

enum menu_choice get_menu_choice(void) {
    /*BOOLEAN success = FALSE;
    long input;
    char * line*/
    
    char line [SCREENWIDTH];
    long end;
    enum  menu_choice choice;
    char prompt[PROMPTLEN]="Please enter your choice: ";
       
    

    /*bring in the menu*/
    /*handle return to the menu*/

    /*do while to manage buffer overflow*/
   /* do {*/

        /*normal_output("Please enter your choice: ");*/
       /* prompt[PROMPTLEN]="Please enter your choice: ";*/
        end=SCREENWIDTH + MAXIMUMM_NUMBER_OF_CHARACTERS;
      choice =  string_from_keyboard(prompt, line, end);

   
    return choice;
}
