/******************************************************************************
 * Student Name    :
 * RMIT Student ID :
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "linkedlist.h"
#include <assert.h>
#include <ctype.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "ui.h"

/**
 * allocates space for a linked list header structure and initialises it to
 * a known safe empty state
 **/
struct linkedlist* linkedlist_make(void)
{
        /* allocate space for the list */
        struct linkedlist* thelist =
            (struct linkedlist*)malloc(sizeof(struct linkedlist));
        if (!thelist)
        {
                perror("malloc");
                return NULL;
        }
        /* zero out the data structure as that's a good safe starting
         * state
         */
        memset(thelist, 0, sizeof(struct linkedlist));
        return thelist;
}

/**
 * creates a new linked list node with the line specified
 **/
static struct linkednode* new_node(struct line* newline)
{
        /* allocate space for the line */
        struct linkednode* newnode =
            (struct linkednode*)malloc(sizeof(struct linkednode));
        if (!newnode)
        {
                perror("malloc");
                return NULL;
        }
        /* attach the data */
        newnode->data = newline;
        newnode->next = NULL;
        return newnode;
}

/**
 * adds the newline parameter to the offset specified by the insert_offset. It
 * is assumed that newline has been separately malloced and it is not a
 * stack address as then the behaviour of this list is undefined.
 **/
BOOLEAN linkedlist_add(struct linkedlist* thelist, struct line* newline,
                       ssize_t insert_offset)
{
        ssize_t count;
        struct linkednode* newnode = new_node(newline);
        struct linkednode* current = thelist->head;
        struct linkednode* prev = NULL;

        /* verify that creation of the node succeeded */
        if (!newnode)
        {
                return FALSE;
        }
        /* check that there is no out of bounds inserts */
        if (!current)
        {
                if (insert_offset != 0)
                {
                        fprintf(stderr, "Error: invalid offset requested.\n");
                }
                thelist->head = newnode;
                ++thelist->size;
                return TRUE;
        }
        /* find the insertion position in the list */
        for (count = 0; count < insert_offset; ++count)
        {
                assert(current->data->lineno == count + 1);
                prev = current;
                current = current->next;
        }
        /* check the insert offset matches the expected line number */
        if (current)
        {
                assert(current->data->lineno == insert_offset + 1);
        }
        /* insert at the front of the list */
        if (!prev)
        {
                /* verify that an insertion at the front of the list was indeed
                 * requested */
                if (insert_offset != 0)
                {
                        fprintf(stderr,
                                "Error: attempt to insert at the head when the "
                                "requested offset is not 0.\n");
                        return FALSE;
                }
                newnode->next = thelist->head;
                thelist->head = newnode;
        }
        else
        {
                /* insert somewhere else in the list */
                prev->next = newnode;
                newnode->next = current;
        }
        ++thelist->size;
        /* renumber all lines from this point forward */
        for (; current; current = current->next)
        {
                ++current->data->lineno;
        }
        return TRUE;
}

/**
 * saves teh linked list to the file pointer specified.
 **/
BOOLEAN linkedlist_save(FILE* receiver, const struct linkedlist* thelist)
{
        const struct linkednode* current;
        ssize_t outcount = 0;

        for (current = thelist->head; current; current = current->next)
        {
                outcount += fprintf(receiver, "%s\n", current->data->text);
        }
        return outcount > 0;
}
