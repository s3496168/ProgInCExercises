/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "main.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "fileio.h"
#include "ui.h"
#include <assert.h>

#define NUMARGS 2
#define FILEARGS 1

/**
 * explain to the user of your program how to use it correctly, when they
 *have
 * provided incorrect args.
 **/
void display_usage(void) {
    fprintf(
        stderr,
        "Please enter the name of ONE file for processing. This should be the "
        "name of the file and NOT accompanied with the file format. For "
        "example, file and NOT file.txt\n");
}
/*
FILE* fp;
FILE* fropen(char* fname) {
    FILE* fp;
    if ((fp = fopen(fname, "r")) == NULL) {
        perror("failed to open file");
        exit(EXIT_FAILURE);
    }
    return fp;
}
FILE* fwopen(char* fname) {
    FILE* fp;
    if ((fp = fopen(fname, "w")) == NULL) {
        perror("Failed to write to file");
        exit(EXIT_FAILURE);
    }
    return fp;
}*/
/**
 * Initialise the editor system  according to the value of fname. If fname
 *is
 * not NULL, load the file path specified.
 **/
BOOLEAN init_system(struct editor_system* thesystem, const char fname[]) {

    /*zero initialised the rest of the struct, as requested*/
    memset(thesystem, 0, sizeof(struct editor_system) * LONG_MIN);

    if (fname == NULL) {
        perror("Error, there is no file name");
        return FALSE;
    } else {
        thesystem->file = fname;
        /*        printf("It's: %s", fname);*/
        return TRUE;
    }
}

int main(int argc, char* argv[]) {
    /* FILE* in;*/
    char* fname;
    /*  char line[BUFSIZ + EXTRACHARS];*/
    /*initialise the system*/
    struct editor_system thesystem;
    struct linkedlist thelist;
    /*Two argc is the minimum argc's needed to take an argument from the
     * user*/
    /**/

    if (argc != NUMARGS) {
        display_usage();
        return EXIT_FAILURE;
    }
    /*utilisation of functions above*/
    fname = argv[FILEARGS];
    /* in = fropen(fname);*/
    /*old code-testing to see if input is working
    if (in) {
        printf("Yay!\n");
    }*/

    if (!init_system(&thesystem, fname)) {
        fprintf(stderr, "Now panic! The system did not initialise!");
        return EXIT_FAILURE;
    }
    load_file(fname, &thelist);
    /*read each existing line from the file*/
    /*if (!load_file(fname, thelist)) {
        printf("It did not load\n");
    } else {
        printf("It loaded\n");
    }*/
    /*   while (fgets(line, BUFSIZ + EXTRACHARS, in) != NULL) {*/

    /*remove the newline character*/
    /* line[strlen(line) - 1] = 0;*/
    /*add line to the document*/
    /*  if (!load_file(line, &thelist)) {
          fprintf(stderr, "Error: the line could not be added\n");
          break;
      }
  }*/

    /* hand the system over to the repl to manage until the program exits */
    repl(&thesystem);
    save_file(fname, &thelist);

    return EXIT_SUCCESS;
}
