/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 ******************************************************************************/

#include "fileio.h"
#include "line.h"
#include <stdlib.h>
#include <string.h>

#define MINUSONE -1
#define ZERO 0
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
/*void list_free();*/
struct line* manage_line(ssize_t, char*, ssize_t);
BOOLEAN load_file(const char fname[], struct linkedlist* thelist) {
    /* line manage_line;*/
    /* ssize_t lineno = 0;*/
    FILE* in;
    /*A2 P2-not necessary-struct line* new;*/
    ssize_t line_count = 0;
    char single_line[BUFSIZ + EXTRACHARS];
    /*A2 P2-not necessaryssize_t len = strlen(single_line);
    list_add(thelist, new);
    printf("Name: %s\n", fname);
    new = manage_line(lineno, single_line, len);*/
    /***********************************************/
    /*NEW- A2 P3-the list CANNOT be NULL*/
    assert(thelist);
    /*Attempt to open the file*/
    in = fopen(fname, "r");
    /*NULL OK here as there cannot be zero file names*/
    if ((in = fopen(fname, "r")) == NULL) {
        perror("Failed to open the file");
        return FALSE;
    }
    /*read line from the file*/
    while (fgets(single_line, BUFSIZ + EXTRACHARS, in) != NULL) {
        /*Referene to line struct now lives here-convenient
         * for compartmentalisation*/
        ssize_t len;
        struct line* new;
        len = strlen(single_line);
        /*remove the newline character once the line has been read*/
        single_line[len - MINUSONE] = ZERO;
        ++line_count;
        --len;
        /*ensure the line is not too long (longer than allowed)*/
        if (single_line[len - MINUSONE] != '\n') {
            fprintf(stderr, "Sorry, the line is too long.\n");
            fclose(in);
            return FALSE;
        }
        /*line struct to make line here*/
        new = manage_line(line_count, single_line, len);
        /*add line to the document*/
        if (!list_add(thelist, new, line_count - MINUSONE)) {
            /*redundant A2 P2 code-not needed
            fprintf(stderr, "Error: the file could not be opened\n");
            break;*/
            fclose(in);
            return FALSE;
        }
    }
    /*ensure end of file has been reacehed*/
    if (!feof(in)) {
        perror("error: read failed\n");
        return FALSE;
    }
    fclose(in);
    printf("Congratulations, you have loaded %s\n", fname);
    return TRUE;
}

/**
 * saves the currently loaded file's data into the tilename specified.
 **/

BOOLEAN save_file(const char fname[], struct linkedlist* thelist) {
    /*name changed to beter identify activity*/
    FILE* out;
    /*Boolean used here so that many, many return values
     * don't have to be written*/
    BOOLEAN funcresult = TRUE;
    /*redundant A2 P2 code-no longer needed
     * char line[BUFSIZ + EXTRACHARS];
       ssize_t len = strlen(line);*/
    /****************************************************************/
    /*ensures file is opened for writing*/
    out = fopen(fname, "w");
    /*Again, null is OK here as there cannot be zero files
     * to write to*/
    if ((out = fopen(fname, "w")) == NULL) {
        perror("Failed to write to the file");
        return FALSE;
    }
    /*A2 P2 junk removed*/
    /*send the data from the list to the output file*/
    if (linkedlist_save(out, thelist)) {
        printf("Yout file %s has been saved!\n", fname);
        funcresult = TRUE;
    } else {
        funcresult = FALSE;
    }
    /*ensure the file is closed*/
    fclose(out);

    return funcresult;
}
