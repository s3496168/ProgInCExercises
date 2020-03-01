/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 ******************************************************************************/

#include "ui.h"
#include "fileio.h"

#include <stdlib.h>
#include <string.h>

/**
 * loads the filename specified into the linked list. The currently loaded
 * file's data should be freed.
 **/
/*
FILE* fp;
FILE* fropen(const char* fname) {
    FILE* fp;*/
/* printf("That:  %s\n", fname);*/
/*  if ((fp = fopen(fname, "r")) == NULL) {
      printf("Thy: %s\n", fname);
      perror("failed to open file");
      exit(EXIT_FAILURE);
  }
  return fp;
}
FILE* fwopen(const char* fname) {
  FILE* fp;
  if ((fp = fopen(fname, "w")) == NULL) {
      perror("Failed to write to file");
      exit(EXIT_FAILURE);
  }
  return fp;
}*/

struct line* manage_line(ssize_t, char*, ssize_t);
BOOLEAN load_file(const char fname[], struct linkedlist* thelist) {
    struct manage_line;
    ssize_t lineno = 0;
    struct line;
    FILE* in;
    char single_line[BUFSIZ + EXTRACHARS];
    /* ssize_t len = strlen(single_line);*/
    printf("Name: %s\n", fname);
    if ((in = fopen(fname, "r")) == NULL) {
        perror("Failed to open the file");
        return FALSE;
    } else {
        while (fgets(single_line, BUFSIZ + EXTRACHARS, in) != NULL) {
            /*add line number*/
            lineno = lineno + 1;
            /*remove the newline character*/
            single_line[strlen(single_line) - 1] = 0;
            /*add line to the document*/
            if (!thelist) {
                fprintf(stderr, "Error: the file could not be opened\n");
                break;
                return FALSE;
            }
        }
    }
    return TRUE;
}

/**
 * saves the currently loaded file's data into the tilename specified.
 **/
BOOLEAN save_file(const char fname[], struct linkedlist* thelist) {
    /*    assert(fname);
        assert(thelist);*/

    /*struct manage_line;*/
    /* ssize_t lineno = 0;*/
    FILE* in;
    char line[BUFSIZ + EXTRACHARS]; /* ssize_t len = strlen(line);*/
    if ((in = fopen(fname, "w")) == NULL) {
        perror("Failed to write to the file");
        return FALSE;
    } else {
        while (fgets(line, BUFSIZ + EXTRACHARS, in) != NULL) {

            line[strlen(line) - 1] = 0;
        }
    }
    list_free(thelist);
    return TRUE;
    ;
}
