/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "linkedlist.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

/**
 * Implement the functions to manage the linkedlist type here.
 */

/*initialises the list to a safe state-the size of 0*/
void list_init(struct linkedlist* thelist) {
    assert(thelist);
    thelist->head = NULL;
    thelist->size = 0;
    /* unsigned lines_allocated;
     unsigned lines_used;*/
}

BOOLEAN list_add(struct linkedlist* thelist, struct line* data) {

    struct linkednode* current, *prev = NULL;
    struct linkednode* new;
    assert(thelist);

    /*initialization and allocation of space for the new node*/
    new = malloc(sizeof(struct linkednode));
    new->next = NULL;

    /*if the list is empty, add to the head*/
    if (thelist->head == NULL) {
        thelist->head = new;
        ++thelist->size;
        return TRUE;
    }

    /*use the loop to itinerate through the list to search for the insertion
     * point, or to the end of the list */
    current = thelist->head;
    while (current != NULL && line_cmp(current->data, data) < 0) {
        prev = current;
        current = current->next;
    }

    /*insertion at the head should there be no prev*/
    if (prev == NULL) {
        new->next = thelist->head;
        thelist->head = new;
    } else {
        /*insertion anywhere else in the list*/
        prev->next = new;
        new->next = current;
    }
    /*growth in the size of the list is achieved by incrementation*/
    ++thelist->size;
    return TRUE;
}
/*free all elements in this list*/
void list_free(struct linkedlist* thelist) {
    /*use a loop to itinerate over the list-NULL indicates the end of the list*/
    struct linkednode* current = thelist->head;
    while (current != NULL) {
        /*begin to free data at next, then work the way down as current always
         * becomes next*/
        struct linkednode* next;
        next = current;
        current = current->next;
        /*free data*/
        free(next->data);
        /*free node*/
        free(next);
    }
}

/*add a line to the list, sorted according to the order established by cmp()*/
int line_cmp(const struct line* first, const struct line* second) {
    /*comparison integer*/
    int cmp;
    /*compare lines*/
    cmp = strcmp(first->text, second->text);
    /*if the text is the same, return the result*/
    if (cmp != 0) {
        return cmp;
    }
}
