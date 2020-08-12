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

/*added functions*/
/*int load(struct file_data *, FILE *);*/
FILE fpRead;
static void clear_buffer();

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
    struct file_data data;
    int result;
    FILE *fptr;
    char line[LINELEN + EXTRACHARS];
    int load(struct file_data, FILE *);
    fptr = fopen("filename[READING]", "r");
    result = load(data, fptr);

    /* if there is an error opening the file, report it */
    if (result <= 0) {
        perror("There has been an error opening the file");
        /*return EXIT_FAILURE;*/
    }

    while (fgets(line, BUFSIZ, fptr) != NULL) {

        /*manage buffer overflow*/
        if (line[strlen(line) - 1] != '\n') {
            perror("Buffer overflow!\n");
            clear_buffer(fptr);
            continue;
        }

        /*remove trailing newline-not needed anymore*/
        line[strlen(line) - 1] = 0;
    }
    fclose(fptr);
    /*load the data into the struct*/
    /*fgets*/

    /*tokenize here too*/

    return data;
}
/**
 * saves data from the current list type to the output file that was
 *specified
 * as part of the command line args.
 **/
BOOLEAN save_data(struct file_data *data, const char filename[]) {
    /* fpRead = fopen(filename[READING], "r+");*/
    return FALSE;
}
