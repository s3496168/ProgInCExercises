/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 1, study period 2, 2020.
 *****************************************************************************/
#include "options.h"

#include <assert.h>
#include <ctype.h>
#include <limits.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

/**
 * this module contains the functions and data structures to implement the
 * requirements of the assignment other than the menu and other i/o.
 **/
/**
 * struct that defines a 'score' within our scoretable
 **/
struct score {
    int letter, score;
};

/**
 * the scores for each letter as defined for scrabble.
 **/
const struct score scoretable[] = {{'A', 1},
                                   {'E', 1},
                                   {'I', 1},
                                   {'L', 1},
                                   {'N', 1},
                                   {'O', 1},
                                   {'R', 1},
                                   {'S', 1},
                                   {'T', 1},
                                   {'U', 1},
                                   {'D', 2},
                                   {'G', 2},
                                   {'B', 3},
                                   {'C', 3},
                                   {'M', 3},
                                   {'P', 3},
                                   {'F', 4},
                                   {'H', 4},
                                   {'V', 4},
                                   {'W', 4},
                                   {'Y', 4},
                                   {'K', 5},
                                   {'J', 8},
                                   {'X', 8},
                                   {'Q', 10},
                                   {'Z', 10}};

/**
 * in this function you calculate the score for the word passed in. It is the
 * sum of the scores for each letter.
 **/
int word_score(const char word[]) {
    normal_output("You have reached word score.\n");
    return -1;
}

/**
 * recursive function you need to implement to find out if two strings are
 * an anagram of each other. Please see the assignment specification for
 * details about this requirement.
 **/
BOOLEAN is_anagram(const struct anagram_pair* thepair) {
    /* delete this commend and return value and replace with the correct
     * implementation for this function */
    normal_output("You have reached the anagram checker.\n");
    normal_output("BE VERY AFRAID!!!!!!!\n");
    return FALSE;
}

/**
 * you are to display a table of all the characters in an input string as the
 * letter itself, its binary, octal, decimal and hexadecimal representations.
 *
 * Please see the assignment spec for the detail on this requirement.
 **/
void asciitable(const char input[]) {
    normal_output("You have reached the ascii table\n");
}

/**
 * create the map of characters based on the map string passed in.
 * Ensure that it is a valid map as defined in the spec.
 **/
struct map create_map(int width, int height, const char map_string[]) {
    struct map themap;
    normal_output("You have reached the create a character map\n");
    return themap;
}

/**
 * search the map for clusters of chars. In each location if there is not a
 * space, look at all the immediate neighbours and count up all the immediate
 * neighbours in all directions that contain the current character, including
 * the current cell.
 **/
void find_clusters(const struct map* themap) {
    normal_output("You have reached the search a map\n");
}
