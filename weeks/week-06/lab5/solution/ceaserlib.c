#include "ceaserlib.h"
/*****************************************************************
 * cypher() - shift each character in a string along by the number
 * of letters specified by the the shift parameter.
 *****************************************************************/
void cypher(char * s, int shift)
{
    /* while we are not at the end of the string */
    while(*s)
    {
        /* grab the char */
        int ch = *s;
        /* leave non-alphabetic characters alone */
        if(isalpha(*s))
        {
            /* shift the character along */
            ch += shift;
            /* handle wrapping of characters that are no within 
             * the a-z range
             */
            if(islower(*s))
            {
                if(ch > 'z') 
                {
                    while(ch > 'z')
                        ch -= ALPHABETLEN;
                }
                else if(ch < 'a')
                {
                    while(ch < 'a')
                        ch += ALPHABETLEN;
                }
            }
            else
            {
                if(ch > 'Z')
                {
                    while(ch > 'Z')
                        ch -= ALPHABETLEN;
                }
                else if(ch < 'A')
                {
                    while(ch < 'A')
                        ch += ALPHABETLEN;
                }
            }
        }
        /* assign the character back to the pointer and increment
         * to the next space in the array
         */
        *s++ = ch;
    }
}

/****************************************************************
 * clears the buffer of any leftover input
 ****************************************************************/
void read_rest_of_line(void)
{
    int ch;
    while(ch = getchar(), ch!=EOF && ch!='\n');
    clearerr(stdin);
}

/****************************************************************
 * get input from the user. Validate that the string entered was 
 * not too long.
 ****************************************************************/
enum result get_input(const char * prompt, char *output, 
        unsigned len)
{
    char * result;
    /* print out the prompt string */
    printf("%s\n", prompt);
    /* read in data from the user */
    result = fgets(output, len + EXTRASPACES, stdin);
    /* if the user pressed ctrl-d we simply pass that back to the 
     * calling function 
     */
    if(!result)
        return EMPTY;
    /* if the user entered too much input, we clear the buffer and
     * return a notification to the calling function that this 
     * has occurred 
     */
    if(output[strlen(output)-1]!='\n')
    {
        fprintf(stderr, "Error: line entered was too long.\n\n");
        read_rest_of_line();
        return FAILURE;
    }
    /* otherwise, we remove the newline character and return a 
     * success indicator to the calling function 
     */
    output[strlen(output)-1]=0;
    return SUCCESS;
}

/*****************************************************************
 * get_int() - displays a prompt displayed by the user and 
 * retrieves the string from the keyboard. If there was an error
 * in retrieving input, we just pass that back, likewise if the 
 * user pressed ctrl-d. Otherwise, we attempt to extract an 
 * integer from the string. We then return the exit / failure 
 * status of the conversion.
 *****************************************************************/
enum result get_int(const char *prompt , int * output)
{
    char int_str[LINELEN+EXTRASPACES];
    enum result res ;
    char * end;

    /* retrieve user input from the keyboard */
    res = get_input(prompt, int_str,LINELEN);
    if(strlen(int_str) == 0)
    {
        fprintf(stderr, "Error: input must be numeric.\n");
        return FAILURE;
    }
    switch (res)
    {
        /* if the user pressed ctrl-d or there was a user input 
         * failure, we just pass that back to the calling 
         * function.
         */
        case EMPTY:
        case FAILURE:
            return res;
            break;
        case SUCCESS:
            /* we attempt to extract the number from the string. 
             * We return the success / failure status from 
             * performing this operation and validating that there
             * was a valid integer in the string 
             */
            *output = (int)strtol(int_str, &end, 0);
            if(*end)
            {
                return FAILURE;
            }
    }
    return SUCCESS;
}
