/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 2, study period 2, 2020.
 *****************************************************************************/
#include "fileio.h"
#include "helpers.h"
#include "shared.h"
#include <stdio.h>
#include <assert.h>
#include <string.h>
#include <stdlib.h>

/*added constants*/
#define READING 1
#define WRITING 2
#define LINELEN 80
#define EXTRACHARS 2
#define WORDLEN 12

/*added functions*/
/*int load(struct file_data *, FILE *);*/
/*int load(struct file_data, FILE *);*/
static void clear_buffer();
struct file_data make_word(char *);

/**
 * modified clear_buffer() function to work with file input
 **/

static void clear_buffer(FILE *fp) {
    int ch;
    while (ch = getc(fp), ch != '\n' && ch != EOF)
        ;
    clearerr(fp);
}

/**
 * loads the data into the appropriate list type according to the value
 * passed in.
 **/
struct file_data load_file(const char filename[], enum list_type type) {
    FILE *fptr;
    struct file_data data;
    /* char result;*/
     char line[LINELEN + EXTRACHARS];

    fptr = fopen(filename, "r");
    
    /* char = load(data, fptr);*/

    /* if there is an error opening the file, report it */
    if (!fptr) {
        perror("There has been an error opening the file");
        /*return EXIT_FAILURE;*/
    }

    /*load the data into the struct*/
    /*fgets to obtain user input*/

    while (fgets(line, BUFSIZ, fptr) != NULL) {
        char *punct_token;
        char *wordcpy = strdup(line);
        
        /* char word[WORDLEN + EXTRACHARS];*/

        /*manage buffer overflow*/
        if (wordcpy[strlen(wordcpy) - 1] != '\n') {
            /*Below error is painful for large files, hence it has been removed*/
            /*perror("Buffer overflow!\n");*/
            clear_buffer(fptr);
            continue;
        }

        /*remove trailing newline-not needed anymore*/
        wordcpy[strlen(wordcpy) - 1] = 0;

        /*tokenize here too-obtain the first token*/
        punct_token = strtok(wordcpy, PUNCTUATION SPACES NUMBERS);
        if (!punct_token) {
            perror("There is an invalid word");
            free(wordcpy);
        }
        /*obtain other tokens*/

        /*while (punct_token) {*/

        /*copy the data into a string*/
        /*strcpy(word, punct_token);
        punct_token = strtok(NULL, PUNCTUATION SPACES NUMBERS);
    }
    data = make_word(word);*/

        /*strcpy(data.whichlist.array_list, wordcpy);*/

        /*file_data->data = data;*/
        fclose(fptr);
        free(wordcpy);
    }
    return data;
}

/**
*loading function
**/
/*
char load(struct file_data entries, FILE* fpRead){

return word;
}*/

/**
 * saves data from the current list type to the output file that was
 *specified
 * as part of the command line args.
 **/

BOOLEAN save_data(struct file_data *data, const char filename[]) {
    /* fpRead = fopen(filename[READING], "r+");*/
    FILE *fptrs;
    fptrs = fopen(filename, "w");
    

    /* if there is an error writing to the file, report it */
    if (!fptrs) {
        perror("There has been an error writing to the file");
        /*return EXIT_FAILURE;*/
    }
     fclose(fptrs);
    return FALSE;
}
