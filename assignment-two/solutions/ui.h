#include "main.h"
#include "shared.h"
#ifndef UI_H
#define UT_H
#define EXTRACHARS 2
#define SCREENWIDTH 80
#define MARGIN_WIDTH 5

/**
 * input result enum for handling the results of user input
 **/
enum input_result { IR_FAILURE, IR_SUCCESS, IR_NL, IR_EOF };

#define PUT_LINE(ch, len)                            \
    {                                                \
        int count;                                   \
        for (count = 0; count < (int)len; ++count) { \
            putchar((ch));                           \
        }                                            \
        putchar('\n');                               \
    }

/**
 * interface function for reading user input from the keyboard
 **/
enum input_result get_string(const char prompt[], char output[], ssize_t);

/**
 * the implementation of the user interface itself
 **/
void repl(struct editor_system *);
#endif
