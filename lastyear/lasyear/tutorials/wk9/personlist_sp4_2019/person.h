#include <stdlib.h>
#include <string.h>
#include <stdio.h>
#ifndef PERSON_H
#define PERSON_H
#define NAMELEN 40
struct person {
    char fname[NAMELEN + 1];
    char lname[NAMELEN + 1];
    unsigned int age;
};
struct person* make_person(const char[], const char[], unsigned);
int person_cmp(struct person* person_a, struct person* person_b);
#endif
