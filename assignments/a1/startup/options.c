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

#define WORDMAX 90 /*to give the user some leniency*/

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
    /*struct score scoring;*/
    /*char plen;*/
    int score = 0;
  int i;
  int j;
    

/*normal_output("%d letter: ", score.letter);*/


   /* normal_output("The word is %s", word);
    while (*word != '\0') {*/
        /*if ((*word >= 'A' && *word <= 'Z') || (*word >= 'a' && *word <= 'z')) {*/
           /* scoretable[i].score=scoretable[i].score+scoretable[i].letter;
           
            
        }

        word++;
        
    }*/
 
    
    for (i=0; i<WORDMAX; i++){
     for (j=0; j<WORDMAX; j++){
       /*if ((*word >= 'A' && *word <= 'Z') || (*word >= 'a' && *word <= 'z')) {*/
     if(word[j]==scoretable[i].letter){

        /*  normal_output(" %d %d ",scoretable[j].letter, scoretable[i].score);*/
        score=score+scoretable[j].score;
     }
      
     }
    }
    return score;
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
 /*here as a suggestion only-any feedback would be appreciated*/
struct map create_map(int width, int height, const char map_string[]) {
   struct map themap;
/*    char token;
      int i;
    int j;
    themap.height=height; 
    themap.width=width;

  

    for (i=0; i<width; i++){
        for (j=0; j<height; j++){
            token=strtok(height, map_string);
            token = strtok(width, map_string);
        }
    }token=strtok(NULL, map_string);
    token = strtok(NULL, map_string);*/
    return themap;
}

/**
 * search the map for clusters of chars. In each location if there is not a
 * space, look at all the immediate neighbours and count up all the immediate
 * neighbours in all directions that contain the current character, including
 * the current cell.
 **/
 /*map created with strtok would live here*/
void find_clusters(const struct map* themap) {
    normal_output("You have reached the search a map\n");
}
