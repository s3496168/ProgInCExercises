#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "file_support.h"

#define MAXSTRINGS 100
#define EXTRACHARS 2
#define HERE 0
#define READER 1
#define TOTAL 12522448
/*The total of argv above*/

int main(int argc, char *argv[]) {
    FILE *ifp;
    char *fname;
    char ch;
    int c;
    int i;
    int z;

    if (argc < 2) {

        printf("Missing Filename\n");
        return EXIT_FAILURE;
    } else {

        for (z = 1; z < TOTAL; z++) {
            fname = argv[z];
            if (fname != NULL) {
                printf("%d: %s\n", z, fname);

                /*leftovers*/
                /* fname[strlen(fname)-1]=0;*/

                ifp = gropen(fname);
                if (ifp) {

                    /*more leftovers*/
                    /*   printf("It worked\n");*/

                    for (c = 1; c < argc; ++c) {
                        for (i = 0; i < 1; ++i) {
                            while ((ch = fgetc(ifp)) != EOF) {

                                printf("%c", ch);
                            }
                        }
                    }
                    if ((ifp = fopen(argv[z], "rw")) == NULL) {
                        printf("no files!\n");

                    } else if ((ch = fgetc(ifp)) != EOF) {
                        printf("\n");
                    } else {
                        printf("Error!\n");
                    }
                    fclose(ifp);

                } else {
                    printf("It failed\n");
                    return EXIT_FAILURE;
                }
            }
        }
    }
    return EXIT_SUCCESS;
}
