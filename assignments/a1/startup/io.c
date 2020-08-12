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
#include <assert.h>

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
#define PROMPTLEN 30

/* required for strtol() */
#define DECIMAL 10

#define MAXCLUSERINPUT 200

/*functions used in the program*/
static void clear_buffer();

static BOOLEAN long_from_string();
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
}S

/*new teacher code*/

/**
 * displays the prompt specified, then reads in a string of input. It also
 * handles all errors with buffer overflow.
 **/
enum input_result string_from_keyboard(const char prompt[], char output[],
                                       long len) {
enum input_result menu_result;
    BOOLEAN success = FALSE;
    long * plen;
    /*long ** pplen;*/

    /*do while to manage buffer overflow*/
    do {
 puts(prompt);
        /*read in the line*/
        fgets(output, len, stdin);
        /*test for buffer overflow-of present manage with the famous
         * function*/
        
 
            if (output[strlen(output)+1] == '\0'){
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
    plen =  &len; 
/*pplen = &plen;*/
/*IR failure management*/
   if (output == IR_FAILURE) {
        error_output("Option could not be run successfully\n");
        return MNU_INVALID;
    }
    
  menu_result= long_from_keyboard(output,plen);

    return menu_result;
   
}

/**
 * reads a string from the keyboard via a call to string_from_keyboard()
 * and then converts the data to a long using strtol().
 **/
enum input_result long_from_keyboard(const char prompt[], long* output) {
    char * ptrResult;
  /*  enum input_result menu_result;*/
    enum input_result number_result;
    /*enum input_result manage_the_menu;*/

    int FakeNumber;
    int *ptrForFakeNumber;
    /*int **pptrForFakeNumber;*/

  /*send array to long from string if it isn't an integer*/
if (*ptrResult != '\0') {
        number_result=long_from_string(prompt, ptrResult);
    }
    *output = strtol(prompt, &ptrResult, DECIMAL);
   
    
     /*ptrtoopt =&output;*/
   
    

      /*create a fake number in order to pass it*/
  if (*ptrResult == '\0') {
        assert(FakeNumber=(int)*output);
        ptrForFakeNumber = &FakeNumber;
   }
   
  number_result=int_from_keyboard(prompt,ptrForFakeNumber);
    return  number_result;
}

/**
 * calls long_from_keyboard() to read input from the user and convert that into
 * a number. We then validate that it is in the range of an integer. 
 **/
enum input_result int_from_keyboard(const char prompt[], int *output) {
    enum input_result menu_result;
 
   int **pptr;
    /*and now the fake integer shall be made a real integer*/
   pptr = &output;
 normal_output("Test %d ", *output);
    
   
      /*if a number is a digit it shall pass*/
    if (isdigit(**pptr)){
        menu_result=*output;
   } else{
       error_output("Error: the input is not a decimal number");
   return IR_FAILURE;
     
   }  menu_result=**pptr;
    return menu_result;
}

/**
 * converts the data held in a string to a long integer if there is valid source
 * data in the string.
 **/

static BOOLEAN long_from_string(const char str[], long* result) {
/* add your implementation here for extracting a long integer from a string
 * using strtol */
/* char ptrResult;*/
   /* long winded;
    long **yetanotherptr;*/
  
   /* yetanotherptr = &result;*/
   /* winded = **yetanotherptr;*/

/*open when a *result becomes available
 *result = strtol(str, &ptrResult, DECIMAL);*/
return TRUE;
}

/**
 * read the input for the wordscore option
 **/
enum input_result get_wordscore_input(char word[]) {
    enum input_result result;
    const char* heading = "Word Score";
    puts(heading);
    PUTLINE(strlen(heading), '=');
    /* read the word to be scored */
    do {
        if (result = string_from_keyboard(
                "Please enter a word to get a score on (less than "
                "80 chars): ",
                word, LINELEN + EXTRACHARS),
            result == IR_FAILURE) {
            error_output("Invalid input. Please try again.\n\n");
            continue;
        }
    } while (result == IR_FAILURE);
    return result;
}

/**
 * handles input for the asciitable option
 **/
enum input_result get_asciitable_input(char input[]) {
    enum input_result result;
    const char* heading = "Ascii Table For a Phrase";
    puts(heading);
    PUTLINE(strlen(heading), '=');
    /* read the string from the keyboard and handle any errors */
    do {
        if (result = string_from_keyboard(
                "Please enter a phrase to display the asciitable for (less "
                "than "
                "80 chars): ",
                input, LINELEN + EXTRACHARS),
            result == IR_FAILURE) {
            error_output("Invalid input. Please try again.\n\n");
            continue;
        }
    } while (result == IR_FAILURE);
    return result;
}

/**
 * get input for the anagram option. Please note that in this case that
 * two words are needed so I put them in a struct.
 **/
enum input_result get_anagram_input(struct anagram_pair* input) {
    enum input_result result;
    char line[LINELEN + EXTRACHARS];
    char* heading = "Anagram Check";
    puts(heading);
    PUTLINE(strlen(heading), '=');
    /* read the first word */
    do {
        result =
            string_from_keyboard("Please enter the first word to compare: ",
                                 line, LINELEN + EXTRACHARS);
    } while (result == IR_FAILURE);
    if (result == IR_EOF) {
        return result;
    }
    strcpy(input->firstword, line);
    input->firstlen = strlen(input->firstword);

    /* read the second word */
    do {
        result =
            string_from_keyboard("Please enter the second word to compare: ",
                                 line, LINELEN + EXTRACHARS);
    } while (result == IR_FAILURE);
    if (result == IR_EOF) {
        return result;
    }
    if (result == IR_EOF) {
        return result;
    }
    strcpy(input->secondword, line);
    input->secondlen = strlen(input->secondword);
    return IR_SUCCESS;
}


/**
 * reads data for the map that will be used in processing it in order to find
 * any clusters
 **/
enum input_result get_cluster_input(struct map_input* input) {
    enum input_result result;
    char input_text[MAXCLUSERINPUT + EXTRACHARS];
    const char* heading = "Find Clusters";
    puts(heading);
    PUTLINE(strlen(heading), '=');
    /* read the width */
    do {
        result = int_from_keyboard(
            "Please enter the value for the width of the map: ", &input->x);
    } while (result == IR_FAILURE);
    if (result == IR_EOF) {
        return result;
    };
    /* read the height */
    do {
        result = int_from_keyboard(
            "Please enter the value for the height of the map: ", &input->y);
    } while (result == IR_FAILURE);
    if (result == IR_EOF) {
        return result;
    }
    /* read the string that contains the data for the map */
    do {
        result = string_from_keyboard(
            "Please enter a string that defines the map to be processed to "
            "define clusters: ",
            input_text, LINELEN + EXTRACHARS);
    } while (result == IR_FAILURE);
    if (result == IR_EOF) {
        return result;
    }
    strcpy(input->cluster_text, input_text);
    return result;
}

/*end new teacher code*/

/**
 * display the menu and then get the choice from the user. Please note that
 * you should implement this in such a way that it is easy to maintain and
 * extend. Hardcoding the menu output here will get you a maximum of half
 *the
 * marks.
 **/
 
/*
struct menu {
    char selection[NUM_MENU_CHOICES];
} options;
*/

void init_the_menu() {
char* heading;
int count;
int strlen_heading;


    /*
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
    */
    /*incorrect loop here*/
    /*normal_output("These are: %s\n", options.selection);*/
    /*refactored menu*/
    char* menu_list[] = {"word scrore",                     "ascii table",
                         "check if two words are anagrams", "find clusters",
                         "quit"};

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
        normal_output("%d) %s\n", count + 1, menu_list[count]);
    }
}

/*the enum to gather user input*/
enum menu_choice get_menu_choice(void) {
    BOOLEAN success = FALSE;
    long input;
    char line [SCREENWIDTH];
    long end;
    char * ptr;
    enum input_result result;
  /*  char prompt[PROMPTLEN]="Please enter your choice: ";*/
       
    

    /*bring in the menu*/
    /*handle return to the menu*/

   

       
       /* prompt[PROMPTLEN]="Please enter your choice: ";*/
        end=SCREENWIDTH + MAXIMUMM_NUMBER_OF_CHARACTERS;
      /*bring in the menu*/
/*handle return to the menu*/

    /*do while to manage buffer overflow*/
    do {

        normal_output("Please enter your choice: ");
        /*read in the line*/
        fgets(line, end, stdin);
        /*test for buffer overflow-of present manage with the famous
         * function*/
          if (line[strlen(line)-1] == '\0'){
            return MNU_EOF;
            }

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
    input = strtol(line, &ptr, DECIMAL);

    /*ensure input is a number*/
    if (*ptr != '\0') {
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
        /*note that the subtraction for the enum hasn't happened yet*/
   }else if (input == MNU_EOF) { 
        return MNU_QUIT;
    }else if (input > MNU_EOF) {
        error_output(
            "Error: %d is larger than the boundary. Please enter a number "
            "between %d and %d.\n",
           input, MIN_NUM_MENU_CHOICES, NUM_MENU_CHOICES);
        return IR_FAILURE;}
         else {
        /*subtract one from the input due to the enum*/
        input--;
        result = input;
    }

    /* normal_output("It is: %d\n", result);*/
    /*setup to utilise the provided enum-normal output kept defaulting the
     * value
     * to 18. Hence it was removed*/

    if (result == IR_FAILURE) {
        error_output("Option could not be run successfully\n");
        return MNU_INVALID;
    }
    
    /*normal_output("First one is: %d\n", result);*/
    return result;

}

/*REMEMBER TO ENTER HANDLING FOR NON NUMERIC DATA*/
/*Alt message: Error: int is not a valid menu choice. Please try again*/

/*extensive function to permit quitting*/
/*static void quit() {}*/

/*A switch to proecess the menu input. Note that the switch itself doesn't
 * return anything*/
/* void process_menu_choice(enum menu_choice get_menu_choice) {
     enum input_result another_result;
    char more_input[LINELEN+EXTRACHARS];
    int score;
   struct anagram_pair anagram_input;
     struct map_input cluster_input;
         struct map themap;
        BOOLEAN valid_map;
   switch (get_menu_choice) {if (is_anagram(&anagram_input)) {
                 normal_output("%s and %s are anagrams.\n",
                              anagram_input.firstword,
                              anagram_input.secondword);
             } else {
                 normal_output("%s and %s are not anagrams.\n",
                               anagram_input.firstword,
                              anagram_input.secondword);
             }

        case MNU_WD_SCR:*/
/*word_score(NULL);*/

/* another_result = get_wordscore_input(more_input);*/
/*
while (another_result == IR_EOF) {
     continue;
}*/
/*    score = word_score(more_input);
     normal_output("the score for \"%s\" is %d\n", more_input, score);
    break;
 case MNU_ASC_TBL:*/
/*asciitable(NULL);*/
/* another_result = get_asciitable_input(more_input);*/
/*while (another_result == IR_EOF) {
    continue;
}*/
/* display the ascii table */
/*     asciitable(more_input);
     break;
 case MNU_ANAG:*/
/* prompt for the two words to compare */
/* another_result = get_anagram_input(&anagram_input);*/
/*while (another_result == IR_EOF) {
    continue;
}*/
/* check if the words are anagrams and display the appropriate
 * output */

/*is_anagram(NULL);*/
/*        break;*/

/* case MNU_CLST:*/
/* find_clusters(NULL);*/
/* do {*/
/* display prompts for creating the map */
/* valid_map = FALSE;
 another_result = get_cluster_input(&cluster_input);
 if (another_result == IR_EOF) {
     break;
}*/
/* create and validate the map */
/*     themap = create_map(cluster_input.x, cluster_input.y,
                         cluster_input.cluster_text);
     if (!themap.isvalid) {
         continue;
     }
     valid_map = TRUE;
 } while (!valid_map); */
/* double check that the input result was not EOF */
/* if (another_result == IR_EOF) {
     break;
 }*/
/* display the clusters that exist in the map */
/*     find_clusters(&themap);
     break;

 case MNU_QUIT:
     quit();
     break;*/
/*
case MNU_EOF:
normal_output("This is not the end");
EOF;
break;*/
/* default:

        error_output(
            "Error: %d is not a valid menu choice. Please try
       again",
            get_menu_choice);*/
/*         if (get_menu_choice != MNU_EOF || get_menu_choice != MNU_QUIT) {
             assert(get_menu_choice == MNU_INVALID);
         }
 }*/
 

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
