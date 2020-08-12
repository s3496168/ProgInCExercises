
/*******************************************************************
File for testing functions needed for A2P2
*******************************************************************/

#include <stdlib.h>
#include <stdio.h>
#include "testing.h"

/*added constants*/

#define NUMARGS 2
#define READING 1
#define WRITING 2

int main(int argc, char** argv) {
    FILE* fpRead;
    FILE* fpWrite;

    union readWrite test[SIZE];
    /*int result;*/

    /*zeroed out array*/
    memset(test, 0, sizeof(union readWrite) * SIZE);
    /*use malloc instead*/

    /* check the command line args */
    if (argc != NUMARGS) {
        perror("Error: the entrant is not a file type.");
        return EXIT_FAILURE;
    }
    printf("The amount of argc is: %d\n", argc);
    printf("The amount of argv[] is: %s\n", argv[1]);
    /*fpRead = gropen(argv[READING]);*/

    fpRead = fopen(argv[READING], "a+");
    /* fpWrite = fopen(argv[WRITING], "w");*/

    fprintf(fpRead, "%s %s %s %s %s %s %s %s %s %s %s %s %s %s %s \n ", "Flee",
            "from ", "the ", "deadly ", " light", "into", "the", "peace", "and",
            "safety", "of", "a", "new", "dark", "age.");

    fclose(fpRead);
    fclose(fpWrite);

    return EXIT_SUCCESS;
}
