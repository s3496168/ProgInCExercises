/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 1, study period 2, 2020.
 *****************************************************************************/
#include "helpers.h"
#include "shared.h"
#include "io.h"

/**
 * this module contains the functions and data structures to implement the
 * requirements of the assignment other than the menu and other i/o.
 **/
#ifndef OPTIONS_H
#define OPTIONS_H

/* the width of each column for display */
#define COLWIDTH 14
/* the maximum height and width for the map */
#define MAXHEIGHT 10
#define MAXWIDTH 10

/**
 * the map type used with the clusters option.
 **/
struct map {
    /* the array of chars that make up the map */
    int themap[MAXHEIGHT][MAXWIDTH];
    /* the width and heigh of the map */
    int width;
    int height;
    /* whether the char data that has been processed was
     * a valid map
     */
    BOOLEAN isvalid;
};


/**
 * the pair of words to check if they are an anagram. Please note that I
 * have provided the length of the two words as well - this means that you
 * only need to call strlen() on these once.
 **/
struct anagram_pair {
    char firstword[LINELEN + 1];
    long firstlen;
    char secondword[LINELEN + 1];
    long secondlen;
};

/**
 * The function prototypes for the options you need to implement
 **/
BOOLEAN is_anagram(const struct anagram_pair *);
void asciitable(const char[]);
int word_score(const char[]);
struct map create_map(int, int, const char[]);
void find_clusters(const struct map *);

/*mine*/

#endif
