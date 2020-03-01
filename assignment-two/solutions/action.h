/******************************************************************************
 * Student Name    :
 * RMIT Student ID :
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/

#include <stdio.h>
#include "linkedlist.h"
#include "shared.h"
#ifndef ACTION_H
#define ACTION_H

/* the different kinds of actions defined in our system */
enum action_type
{
        AT_UNDEFINED = -1,
        AT_HELP,
        AT_LOAD,
        AT_INSERT,
        AT_DELETE,
        AT_SEARCH,
        AT_REPLACE,
        AT_PRINT,
        AT_THROW,
        AT_SAVE,
        AT_QUIT
};

#define NUM_ACTIONS 10

/**
 * each kind of action to be implemented in the system has its own data that
 * it needs to receive.
 **/
struct help_data
{
        /* the option the user wants help on */
        const char* option;
};

struct load_data
{
        /* the path to the file that the user enetered. This might be an
         *absolute
         * ore a relative path. Please do not over-validate this as you should
         *just
         * leave this to the operating system that knows what a valid path is
         **/
        const char* path;
};

struct save_data
{
        /**
         * The path to save the file to
         **/
        const char* path;
};

struct insert_data
{
        /**
         * The line number to start inserting data at
         **/
        ssize_t line_no;
};

struct delete_data
{
        /**
         * The range of lines to delete as in the start number and ending number
         */
        struct line_range range;
};

struct search_data
{
        /**
         * The text to search for in each line
         **/
        const char* needle;
};

struct replace_data
{
        /**
         * The text to search for
         **/
        const char* needle;
        /**
         * What to replace it with
         **/
        const char* replace;
        /**
         * Should we do repeated replacements on the same line
         **/
        BOOLEAN global;
};

struct print_data
{
        /**
         * What is the range of lines to print?
         **/
        struct line_range range;
};

struct throw_data
{
        /**
         * There is no data to provide when discarding a file so I have provided
         * a void pointer here to satisfy the type checker. This should be
         * initialized to NULL.
         **/
        void* mustbenull;
};

struct quit_data
{
        /**
         * Do we want to save this file as part of quitting?
         **/
        BOOLEAN save;
        /**
         * What is the path we wish to save to? Clearly this should be NULL if
         *we
         * are not saving.
         **/
        const char* path;
};

/**
 * the characters that fire each option
 **/
enum action_key
{
        HELP_KEY = '?',
        LOAD_KEY = 'l',
        INSERT_KEY = 'i',
        DELETE_KEY = 'd',
        SEARCH_KEY = '/',
        REPLACE_KEY = 'r',
        PRINT_KEY = 'p',
        THROW_KEY = 't',
        SAVE_KEY = 's',
        QUIT_KEY = 'q'
};

/**
 * the action struct that represents some action in the system. It has two
 * members: a union of the different types of action data, and a type.
 * Only one of these can be initialized and it is undefined what happens if you
 * access a member of a union other than the one initialised. Unions haven't
 * got a lot of love in recent years because "memory is cheap", except when it
 * isn't. Since the C++ standard recently (2017) created a union based type in
 * their language, I consider this relevant today.
 **/
struct action
{
        union action_data
        {
                struct help_data help_data;
                struct load_data load_data;
                struct insert_data insert_data;
                struct delete_data delete_data;
                struct search_data search_data;
                struct replace_data replace_data;
                struct print_data print_data;
                struct throw_data throw_data;
                struct save_data save_data;
                struct quit_data quit_data;
        } data;
        enum action_type type;
};

/**
 * forwards declaration of the editor_system that we need in order to refer to
 * pointers to the editor system
 **/
struct editor_system;

/**
 * typedef for a function pointer to point to any of the functions that
 * implement an action in our system.
 **/
typedef BOOLEAN (*actionfunc)(struct editor_system*, struct action*);

/**
 * array of function pointers to all the functions that implement actions in
 * our system
 **/
void init_action_array(actionfunc[]);

/**
 * function that parses the input strings and returns an action 'object' with
 * the details that the action needs to perform its task.
 **/
struct action process_input(const char[]);

/**
 * functions that implement each action
 **/
BOOLEAN do_help(struct editor_system*, struct action*);
BOOLEAN do_load(struct editor_system*, struct action*);
BOOLEAN do_insert(struct editor_system*, struct action*);
BOOLEAN do_delete(struct editor_system*, struct action*);
BOOLEAN do_search(struct editor_system*, struct action*);
BOOLEAN do_replace(struct editor_system*, struct action*);
BOOLEAN do_print(struct editor_system*, struct action*);
BOOLEAN do_throw(struct editor_system*, struct action*);
BOOLEAN do_save(struct editor_system*, struct action*);
BOOLEAN do_quit(struct editor_system*, struct action*);
#endif
