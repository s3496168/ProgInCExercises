#include <stdio.h>
#include <stdlib.h>
#include <math.h>

#define max 13
#define base 2
#define count 0
#define q 12
#define r 1
#define two 2

int main(void) {
    /*constants for math.h solution*/
    int i;
    int j;
    /*constants for non math.h solution*/
    int this = count;
    int jj = r;

    printf("Math.h solution\n");
    
    for (i = 0; i < max; ++i) {
        j = i;
        j = pow(base,i); 
        printf("%d to the power of %d is %d\n", base, i, j);
    }

    printf("Non math.h solution\n");
    
    for (this = r; this <= q; ++this) {
        jj *= two;
        printf("%d to the power of %d is %d\n", two, this, jj);
    }

    return EXIT_SUCCESS;
}

/**non math.h solution
 * #define count 0
#define q 12
#define r 1
#define two 2

int main(void) {
    int this = count;
    int j = r;
    for (this = count; this <= q; ++this) {
        j *= two;
        printf("%d\n", j);
        printf("%d to the power of %d is %d\n", two, this, j);
    }
    return EXIT_SUCCESS;
}
 **/
