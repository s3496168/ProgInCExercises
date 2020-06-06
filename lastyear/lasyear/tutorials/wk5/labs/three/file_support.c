#include "file_support.h"

/*read open equipt with error for failure*/

FILE* gropen(char* fname) {
    FILE* fp;
    if ((fp = fopen(fname, "r")) == NULL) {
        perror("failed to open file");
        exit(EXIT_FAILURE);
    }
    return fp;
}

/*write open equipt with error for failure*/

FILE* gwopen(char* fname) {
    FILE* fp;
    if ((fp = fopen(fname, "w")) == NULL) {
        perror("failed to write to file");
        exit(EXIT_FAILURE);
    }
    return fp;
}
