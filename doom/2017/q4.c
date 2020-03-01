#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <ctype.h>
#include "q3-shared.h"

int main(void) { return EXIT_SUCCESS; }
/*MAIN START*/
struct word_entry {
    char* word; /* each word is malloced and then copied using strcpy)*/
    int count;  /* how many times this word has been seen */
};
struct word_node {
    struct word_entry* data;
    struct word_node* next;
};
struct word_list {
    struct word_node* head;
    size_t num_nodes; /* count of the number of list nodes */
    size_t num_words; /* count of the actual number of words processed */
};
/*END MAIN*/

/*A*/
void word_list_init(struct word_list* list) {
    /*initialise the list by zeroing it out*/
    memset(list, 0, sizeof(struct word_list));
}
/*END A*/

/*B*/
BOOLEAN word_list_add(struct word_list* list, const char* word) {
    /*memory allocation and variable declaration is worth marks*/
    struct word_node* new = (struct word_node*)malloc(sizeof(struct word_node));
    struct word_entry* entry =
        (struct word_entry*)malloc(sizeof(struct word_entry));
    char* newword = malloc(strlen(word) + 1);
    struct word_node* current, *prev = NULL;

    if (!new || !entry || !newword) {
        return FALSE;
    }
    /*initialise the node*/
    entry->word = newword;
    entry->count = 1;
    new->data = entry;
    new->next = NULL;
    /*test to see if node is empty; if it is fill it*/
    if (list->num_nodes == 0) {
        list->head = new;
        list->num_nodes = list->num_words = 1;
        return TRUE;
    }
    /*list itineration*/
    current = list->head;
    while (current != NULL && strcmp(current->data->word, word) < 0) {
        prev = current;
        current = current->next;
    }
    /*test to see if the word is the same, and if it is,increment*/
    if (strcmp(current->data->word, word) == 0) {
        /*free memory*/
        free(newword);
        free(entry);
        free(new);
        ++current->data->count;
        ++list->num_words;
        return TRUE;
    }
    /*add to the middle or end of the list*/
    if (prev) {
        prev->next = new;
        new->next = current;
    } else {
        /*add to the start of the list*/
        new->next = list->head;
        list->head = new;
    }
    /*increments for the brand new word*/
    ++list->num_nodes;
    ++list->num_words;
    return TRUE;
}

/*END B*/

/*C*/
void word_list_update(struct word_list* list) {
    /*declared variables*/
    struct word_node* current;
    int total = 0;
    /*list iteration*/
    current = list->head;
    if (!current) {
        return;
    }
    while (current != NULL) {
        /*keep a tally of the total*/
        total += current->data->count;
        current = current->next;
    }
    /*updating it in the list header structure*/
    list->num_words = total;
}

/*END C*/
