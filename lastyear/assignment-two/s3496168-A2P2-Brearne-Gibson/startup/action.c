/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "action.h"

void init_action_array(actionfunc funcs[]) {}

/**
 * implement the functionality to parse a command entered by a user here. Please
 * see the assignment specification for further details.
 **/
struct action process_input(const char input[]) {
    struct action theaction;
    return theaction;
}

/**
 * implement the  help system for the program here. This should be based on the
 * program description provided but in your own words.
 **/
BOOLEAN do_help(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * implement the load functionality in this function. It should just fire off
 * the call to load_data, passing in the appropriate arguments. You also need
 * to ensure that editor_system data is consistent with the result of the
 * load_data function.
 **/
BOOLEAN do_load(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * put the program into insert mode, insert each line into the file until the
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
 * search for the needle specified by the user and replace with the specified
 * replacement. If the global modifier has been specified, do this multiple
 * times. Please consider the appropriate modules to implement the components of
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
 * Discards the currently loaded file, frees all memory and sets the loaded_file
 * member of the editor_system structure to be an empty file.
 **/
BOOLEAN do_throw(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * saves the currently loaded file to either the filename it was loaded from
 * or a new filename that has been specified. If there is no loaded file name
 * and no file was specified, display an appropriate error message.
 **/
BOOLEAN do_save(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}

/**
 * quits the program. If a request to save is specified, use the same logic for
 * the file name to save to as in the above do_save() function.
 **/
BOOLEAN do_quit(struct editor_system* thesystem, struct action* theaction) {
    return FALSE;
}
