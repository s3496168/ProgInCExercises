#include <stdio.h>
#include <stdlib.h>

int main(void) {
    /* Array of strings to manipulate */
    char strings[5][14] = {"We", "must", "accept", "finite", "disappointment"};
    printf("%s\n", strings[3]);
    puts(*(strings + 1));
    puts(*strings + 1);
    puts(*(strings + 3) + 2);
    putchar(*(*(strings + 4) + 3) + 2);
    return EXIT_SUCCESS;
}
