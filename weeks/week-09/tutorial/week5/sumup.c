#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define MAXSIZE 10

typedef enum { FALSE, TRUE } BOOLEAN;

/* argv = { "./read_nums", "nums.txt", NULL} */
#define NUMARGS 2
#define FILE_ARG 1
#define LINELEN 80

static BOOLEAN read_file(const char fname[], int array[MAXSIZE]) {
    FILE *in;
    char line[LINELEN + EXTRACHARS];

    in = fopen(fname, "r");
    if (!in) {
        perror("failed to open file");
        return FALSE;
    }
    fgets(line, LINELEN + EXTRACHARS, in);
    if (line[strlen(line) - 1] != '\n') {
        /* display error */
        return FALSE;
    }
    line[strlen(line) - 1] = 0;
    /* tokenize the string with strtok */
    /* for each token, convert to int with strtol */
    /* store it in the array */
    fclose(in);
    return TRUE;
}

int sum_digits(const int array[], long size) {}

BOOLEAN savearray(const int array[], const int sum, const char fname[]) {
    fprintf();
}

void display_usage(void) {}
int main(int argc, char *argv[]) {
    int nums[MAXSIZE];
    /* check and retrieve command line args */
    if (argc != NUMARGS) {
        fprintf(stderr, "Error: invalid arguments.\n");
        display_usage();
    }
    /* open the file */
    /* read line from file */
    /* convert integers and store in array */
    if (!read_file(argv[FILE_ARG], nums)) {
        return EXIT_FAILURE;
    }
    /* add up the numbers */
    /* store them back */
}
