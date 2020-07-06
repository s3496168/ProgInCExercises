#include "person.h"

struct person* make_person(const char fname[], const char lname[],
                           unsigned age) {

    struct person* aperson;
    aperson = (struct person*)malloc(sizeof(struct person));
    if (!aperson) {
        perror("malloc");
    }
    strcpy(aperson->fname, fname);
    strcpy(aperson->lname, lname);
    aperson->age = age;
    return aperson;
}

int person_cmp(struct person* person_a, struct person* person_b) {
    int cmp;
    cmp = strcmp(person_a->lname, person_b->lname);
    if (cmp != 0) {
        return cmp;
    }
    cmp = strcmp(person_a->fname, person_b->fname);
    if (cmp != 0) {
        return cmp;
    }
    return person_a->age - person_b->age;
}
