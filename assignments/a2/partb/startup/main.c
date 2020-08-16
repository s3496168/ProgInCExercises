/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 2, study period 2, 2020.
 *****************************************************************************/
#include "fileio.h"
#include <stdlib.h>
#include <stdio.h>

/*added constants*/

#define NUMARGS 1
/*four fpor the filetypes*/
#define SAVENUMARGS 2
#define TOTALARGS 3

enum list_type array_list;
/*BOOLEAN save_data(struct file_data*, const char[]);*/
/*struct file_data load_file();*/
struct file_data* data;

int main(int argc, char* argv[]) {
    /*struct file_data my_file_data;*/
  
    /*BOOLEAN save_data(struct file_data*, const char[]);*/
   
    /* check the command line args-note 2 args are likely present in the filename */
    if (argc != TOTALARGS) {
        perror("Error: the entrant is not a file type.");
        return EXIT_FAILURE;
    }

    /* 1 may contain the filename */
    printf("This is: %s\n",argv[NUMARGS]);
    load_file(argv[NUMARGS], array_list);
    
    save_data(data, argv[SAVENUMARGS]);
    /*
        if (my_file_data==NULL) {
            perror("Error: failed to load data\n");
            return EXIT_FAILURE;
        }*/

    /* save the stats out to the output file */
    /* free memory and exit */
    return EXIT_SUCCESS;
}
