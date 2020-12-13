#include <stdio.h>
#include <stdlib.h>
#define min 1
#define max 10

int main (void){
    int i;
    int j;
    int k;
    int m = min;

    for (k = min; k <=max; ++k){
    
        for(i=max; i >= k; --i){
        printf(" ");
        }
        for(j=min; j <=m; ++j){
        printf("*");
        }
        m += 2;
    printf("\n");
}
    return EXIT_SUCCESS;
}