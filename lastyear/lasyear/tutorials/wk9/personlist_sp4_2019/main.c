#include <stdio.h>
#include <stdlib.h>
#include "list.h"

#define NUM_PERSONS 3

/* global consts for simplicity of other code */
const char* firstnames[] = {"fred", "barney", "mr"};
const char* lastnames[] = {"flinstone", "rubble", "wilson"};
const unsigned ages[] = {32, 44, 77};

BOOLEAN create_persons(struct person* people[]) {
    int count;
    for (count = 0; count < NUM_PERSONS; ++count) {
        struct person* newperson =
            make_person(firstnames[count], lastnames[count], ages[count]);
        if (!newperson) {
            perror("malloc");
            return FALSE;
        }
        people[count] = newperson;
    }
    return TRUE;
}

int main(void) {
    struct person* people[NUM_PERSONS];
    struct person* removed;
    /* create the list */
    struct list* thelist = list_make();
    /* add some people */
    int count;
    create_persons(people);
    for (count = 0; count < NUM_PERSONS; ++count) {
        if (!list_add(thelist, people[count])) {
            list_destroy(thelist);
            return EXIT_FAILURE;
        }
    }
    removed = list_remove(thelist, people[0]->fname);
    if (removed) {
        printf("removed %s %s from the list at age %u.\n", removed->fname,
               removed->lname, removed->age);
        free(removed);
    }
    list_destroy(thelist);
    return EXIT_SUCCESS;
}
