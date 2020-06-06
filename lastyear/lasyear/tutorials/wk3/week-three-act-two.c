#include <string.h>
#include <stdlib.h>
#include <stdio.h>
#include "week-three-act-one.c"
#define a_length 5

/*int str_function(char str[num], char* output, int ten);*/
char* something(void);

int main() {
    char* demo;
    printf("Please enter some numbers with a comma in between: ");
    demo = something();
    (void)demo;
    return 0;
}

char* something() {
    static char nums[a_length + 1];
    const char s[] = ",";
    char* token;
    char* end = end;
    long n;
    long q = 0;
    /*get first token*/
    long a = 0;
    /*    fgets(nums, 81, stdin);*/
    fgets(nums, 81, stdin);
    token = strtok(nums, s);
    /*walk through the other tokens*/

    while (token != NULL) {

        /*n = str_function(token, end, 10);*/
        n = strtol(token, &end, 10);
        q = q + n;

        if (q > a) {
            a = q;
        }
        token = strtok(NULL, s);
    }

    printf("%ld\n", a);
    return 0;
}
