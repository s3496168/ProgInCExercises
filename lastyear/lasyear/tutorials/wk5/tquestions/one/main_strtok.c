#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "file_support.h"

int load(char* list, FILE*);
void print_to_screen(char* list, int);
/*
char* load(char* list, FILE*);
*/
int main(int argc, char** argv) {
    FILE* fpRead;
    char list[500];
    char* entry;
    int result;

    /*check for the correct number of cmd arguments*/
    if (argc != 2) {
        fprintf(stderr, "Error: invalid arguments.\n\n");
        return EXIT_FAILURE;
    }
    entry = argv[1];
    /*open the input file*/
    fpRead = gropen(entry);
    printf("These: %s\n", entry);
    /*load the data and handle errors*/
    result = load(list, fpRead);
    printf("Those %d\n", result);
    /*if (result <= 0) {*/
    /*print out the data*/
    /*  print_to_screen(list, result);
  }*/
    printf("It worked\n");
    return EXIT_SUCCESS;
}

/*load data from file*/

int load(char* list, FILE* fpRead) {
    /*
    char* load(char* list, FILE* fpRead) {*/
    char line[MAXWIDTH + EXTRASPACES];
    long entry = 0;
    long count = 0;
    long n;
    char* token;
    unsigned ecount = 0;
    char* end = end;
    printf("It worked\n");
    /*
    const char s[] = ",";
    token = strtok(l, s);*/
    printf("list-first: %s\n", list);
    fgets(list, MAXWIDTH + EXTRASPACES, fpRead);
    while (fgets(list, MAXWIDTH + EXTRASPACES, fpRead) != NULL) {/*
        char fname[1000] char linecpy[MAXWIDTH + EXTRASPACES];*/
        /*not needed right now
         * char token;
         * keep a count of the current token
         * token_number curtoken=0*/
        /*
                line[strlen(line) - 1] = 0;
                memcpy(linecpy, line MAXWIDTH + EXTRASPACES);
        */
        /*NOT NEEDED RIGHT NOW EITHER
         * token=strtok(line, " ");*/
        /*inset data into array*/
        /*      strcpy(entries[entrycount], fname);
              ++entrycount;*/

        const char s[] = ",";
        token = strtok(list, s);

        if (token != NULL) {
            n = strtol(token, &end, 10);
            entry = entry + n;
            /*       if (entry > count) {
                       count = entry;
                       printf("Three\n");
                   }*/
            token = strtok(NULL, s);
        }
    }
    printf("N: %ld\n", entry);
    printf("Count: %ld\n", count);

    ecount++;
    return 0;
    /*return (int)ecount;*/
}
/*
void print_to_screen(char* list, int num_entries) {
    unsigned dcount;
    assert(num_entries > 0);
    for (dcount = 0; dcount(unsigned)num_entries; ++dcount) {
        printf("%ld\n", list[dcount].count);
    }
}*/
