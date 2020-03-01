/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "action.h"

enum action_type type;
union action_data data;
struct action theaction;

struct help_data help_data;

void init_action_array(actionfunc funcs[NUM_ACTIONS]) {

    funcs[AT_HELP] = do_help;
    funcs[AT_LOAD] = do_load;
    funcs[AT_INSERT] = do_insert;
    funcs[AT_DELETE] = do_delete;
    funcs[AT_SEARCH] = do_search;
    funcs[AT_REPLACE] = do_replace;
    funcs[AT_PRINT] = do_print;
    funcs[AT_THROW] = do_throw;
    funcs[AT_SAVE] = do_save;
    funcs[AT_QUIT] = do_quit;
};

/**
 * implement the functionality to parse a command entered by a user here.
 *Please
 * see the assignment specification for further details.
 **/
struct action process_input(const char input[]) {
    struct action theaction;
    theaction.data.load_data;

    /*******new**********/
    /*
    if (!fgets(input, 10, stdin) || *input == '\n') {
        return 0;
    } */ /* test for buffer overflow */
       /*   if (input[strlen(string) - 1] !='\n')
{
fprintf(stderr, "Error: buffer overflow.\n");
read_rest_of_line();
return FAILURE;
} */
    /*  all good so remove the newline char* / input[strlen(input) - 1] = 0;*/

    /*********end new**********/

    /* get the choice from the user */
    /*
    while (
        type = get_char(&key),
        type = AT_UNDEFINED || choice > NUM_MENU _OPTIONS || key <= 0) {
        fprintf(stderr, "Error: undefined key tapped.\n");
    }
    return key - 1;
    }*/

    return theaction;
}

/**
 * implement the  help system for the program here. This should be based on
 *the
 * program description provided but in your own words.
 **/
BOOLEAN do_help(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * implement the load functionality in this function. It should just fire
 *off
 * the call to load_data, passing in the appropriate arguments. You also
 *need
 * to ensure that editor_system data is consistent with the result of the
 * load_data function.
 **/
BOOLEAN do_load(struct editor_system* thesystem, struct action* theaction) {

    int num_lines, line_count;
    7 char* lines[BUFSIZ];
    8 char* newname;

    return FALSE;
}

/**
 * put the program into insert mode, insert each line into the file until
 *the
 * user indicates they wish to end insertion with ctrl-d.
 **/
BOOLEAN do_insert(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * perform the delete of the requested lines based on the range specified by
 * the user.
 **/
BOOLEAN do_delete(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * search over the whole linked list of data, looking for the substring
 * specified. You should print out all matching lines, as per the sameple
 * executable provided.
 **/
BOOLEAN do_search(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * search for the needle specified by the user and replace with the
 *specified
 * replacement. If the global modifier has been specified, do this multiple
 * times. Please consider the appropriate modules to implement the
 *components of
 * this algorithm.
 **/
BOOLEAN do_replace(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * prints out the specified range of lines. Please see the assignment
 * specification for the definition of what a range is.
 **/
BOOLEAN do_print(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * Discards the currently loaded file, frees all memory and sets the
 *loaded_file
 * member of the editor_system structure to be an empty file.
 **/
BOOLEAN do_throw(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * saves the currently loaded file to either the filename it was loaded from
 * or a new filename that has been specified. If there is no loaded file
 *name
 * and no file was specified, display an appropriate error message.
 **/
BOOLEAN do_save(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * quits the program. If a request to save is specified, use the same logic
 *for
 * the file name to save to as in the above do_save() function.
 **/
BOOLEAN do_quit(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}
