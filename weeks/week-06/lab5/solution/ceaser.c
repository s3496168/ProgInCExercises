#include <stdio.h>
#include <stdlib.h>
#include "ceaserlib.h"
/* strings defined up top to save space */
#define STRING_PROMPT "Please enter a string to apply " \
    "the cypher to: " 
#define SHIFT_PROMPT "Please enter the shifting factor " \
    "for this cypher: "

int main(void)
{
    /* our string to be encrypted */
    char string[LINELEN + EXTRASPACES];
    /* the amount of shift - could be positive or negative */
    int shift;
    BOOLEAN cont=TRUE;
    BOOLEAN int_success;

    /* until the user presses ctrl-d we keep asking for input */
    while(cont)
    {
        enum result res;

        /* get the input string for encryption */
        res = get_input(STRING_PROMPT, string, LINELEN);
        /* stop processing input on ctrl-d */
        if(res==EMPTY)
        {
            cont=FALSE;
        }
        else if(res == FAILURE)
        {
            fprintf(stderr, "Error: there was an error in your "
                    "input. Please try again.\n\n");
            continue;
        }
        else
        {
            /* while the input is not valid, we keep asking for 
             * input 
             */
            int_success = FALSE;
            while(!int_success)
            {
                /* get the input shift value */
                res = get_int(SHIFT_PROMPT, &shift);
                switch(res)
                {
                    case EMPTY:
                        /* if the user presses ctrl-d, we exit the 
                         * program
                         */
                        return EXIT_SUCCESS;
                        break;
                        /* if the user did not enter a valid 
                         * integer, we simply ask again unti they
                         * get it right.
                         */
                    case FAILURE:
                        fprintf(stderr, "Error: invalid input for"
                                " the shifting factor. Please try "
                                "again.\n\n");
                        continue;
                        break;
                        /* if the user enters valid data, we 
                         * perform the shift and output the 
                         * resulting encrypted string
                         */
                    case SUCCESS:
                        cypher(string, shift);
                        printf("The output cypher is: %s\n", 
                                string);
                        int_success = TRUE;
                }
            }
        }
    }
    return EXIT_SUCCESS;
}
