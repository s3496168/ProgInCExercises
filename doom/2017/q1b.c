#include <stdlib.h>
#include <stdio.h>
/*incorrect*/
/*define MULTIPLY(A,B) A*B*/
/*correct*/
#define MULTIPLY(A, B) ((A) * (B))

int main(void) {
    /*int j = 0;*/
    int j = 5 * MULTIPLY(24 + 24, 42 + 42);
    printf("%d\n", j);
    return EXIT_SUCCESS;
}
