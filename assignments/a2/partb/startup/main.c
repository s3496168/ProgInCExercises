/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 2, study period 2, 2020.
 *****************************************************************************/
#include "fileio.h"
#include <stdlib.h>

/*added constants*/

#define NUMARGS 2

enum list_type array_list;
int main(int argc, char* argv[]) {
    int result;
    struct file_data my_file_data;
    /* check the command line args */
    if (argc != NUMARGS) {
        perror("Error: the entrant is ont a file type.");
        return EXIT_FAILURE;
    }
    /* load and parse the source file */

    /* 1 may contain the filename */
    my_file_data = load_file(argv[NUMARGS], array_list);

    if (result == 0) {
        perror("Error: failed to load data\n");
        return EXIT_FAILURE;
    }

    /* save the stats out to the output file */
    /* free memory and exit */
    return EXIT_SUCCESS;
}
