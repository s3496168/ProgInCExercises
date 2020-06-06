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

#define ZERO 0
#define ONE 1
/**
 * Implement the functions to manage the linkedlist type here.
 */

/*new-actually make the list*/

struct linkedlist* linkedlist_generate(void) {
    /*allocate space for the list*/
    struct linkedlist* thelist =
        (struct linkedlist*)malloc(sizeof(struct linkedlist));
    if (!thelist) {
        perror("malloc");
        return NULL;
    }
    /*set the data structuret to a safe state-the size of 0*/

    memset(thelist, 0, sizeof(struct linkedlist));
    return thelist;
}

static struct linkednode* new_node(struct line* new) {
    /* allocate space for the line HERE (see below for significance */
    struct linkednode* newnode =
        (struct linkednode*)malloc(sizeof(struct linkednode));
    if (!newnode) {
        perror("malloc");
        return NULL;
    } /* attach the data */
    newnode->data = new;
    newnode->next = NULL;
    return newnode;
}

/*Redundant A2 P2 code
initialises the list to a safe state-the size of 0
void list_init(struct linkedlist* thelist) {
    assert(thelist);
    thelist->head = NULL;
    thelist->size = 0;
     unsigned lines_allocated;
     unsigned lines_used;
}*/

/*Adds a place (parameter) gor the mewline to go to the offset (as
 * insert_offset). Note that the list of the behavipur is undefined, and hence
 * not a stack address. It is thus necessary to have allocated memory (malloced)
 * for the line elsewhere (see above for location of memory allocated for the
 * line)*/

BOOLEAN list_add(struct linkedlist* thelist, struct line* new,
                 ssize_t insert_offset) {
    ssize_t count;
    struct linkednode* prev = NULL;
    /*slightly refactored from A2-assosciated line struct with creation of new
     * node*/
    struct linkednode* newnode = new_node(new);

    /*current struct now located here due to it needing to allow for the list
     * and subsequently the start of the list (head member) within it to be
     * selected*/

    struct linkednode* current = thelist->head;

    /*Redundant A2 P2 code-no longer necessary as line and list is
     * malloced elsewhere, also the line struct subsequently
     * does not contain a member called "next"-nor did it during A2 P2
    initialization and allocation of space for the new node
    new = malloc(sizeof(struct linkednode));
    new->next = NULL;*/

    /*This now checks to ensure there are no out of bounds inserts
     * -note the refactored code. Not value is used (!) as the value
     *  should be not current, not current = 0 as null would have*/
    if (!current) {
        if (insert_offset != ZERO) {
            fprintf(stderr, "Error: invalid offset requested.\n");
        }
        thelist->head = newnode;
        ++thelist->size;
        return TRUE;
    }

    /* verify that creation of the node succeeded */
    if (!newnode) {
        return FALSE;
    }

    /*A2 P2....now redundant due to identified list order*/
    /*use the loop to itinerate through the list to search for the insertion
     * point, or to the end of the list */
    /*now located near the prorotype for convenience-current = thelist->head;*/
    count = ZERO;
    while (count < insert_offset) {
        assert(current->data->lineno == count + ONE);
        prev = current;
        current = current->next;
        ++count;
    }

    /* check the insert offset matches the expected line number */
    if (current) {
        assert(current->data->lineno == insert_offset + ONE);
    }

    /*insertion at the head should there be no previous-note null affords a
     * zero value and as a result this code has changed to !*/
    if (!prev) {
        /*ensure that insertion at the front of the list was called for*/
        if (insert_offset != ZERO) {
            fprintf(stderr,
                    "Error: attempt to insert at the head when the "
                    "requested offset is not zero\n");
        }
        newnode->next = thelist->head;
        thelist->head = newnode;
    } else {
        /*insertion anywhere else in the list*/
        prev->next = newnode;
        newnode->next = current;
    }

    /*growth in the size of the list is achieved by incrementation*/
    ++thelist->size;
    /*new-loop permitting the memorisation of lines from now on*
 */
    for (; current; current = current->next) {
        ++current->data->lineno;
    }

    return TRUE;
}

/*NEW for P3-Save feature-saves the linkedlist to the specified file pointer*/
BOOLEAN linkedlist_save(FILE* receiver, const struct linkedlist* thelist) {
    const struct linkednode* current;
    ssize_t outcount = ZERO;

    for (current = thelist->head; current; current = current->next) {
        outcount += fprintf(receiver, "%s\n", current->data->text);
    }
    return outcount > 0;
}

/*A2 P2 redundant code-no longer needed
 * free all elements in this list
void list_free(struct linkedlist* thelist) {
    use a loop to itinerate over the list-NULL indicates the end of the list
    struct linkednode* current = thelist->head;
    while (current != NULL) {
        begin to free data at next, then work the way down as current always
         * becomes next
        struct linkednode* next;
        next = current;
        current = current->next;
        free data
        free(next->data);
        free node
        free(next);
    }
}*/

/*A2 P2 redundant code-no longer needed-
 * add a line to the list, sorted according to the order established by cmp()
int line_cmp(const struct line* first, const struct line* second) {
    comparison integer
    int cmp;
    compare lines
    cmp = strcmp(first->text, second->text);
    if the text is the same, return the result
    if (cmp != 0) {
        return cmp;
    }
}*/
