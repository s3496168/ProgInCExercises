/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 2, study period 2, 2020.
 *****************************************************************************/
#include "shared.h"
#define NEWLINENO 50

long counter(void){
/**
 * implement functions that manage objects in shared.h here.
 **/
/*this declared counting variable is not initialised here. It will be initialised by another function*/
long count;

do{
/*This obtains the value of the next counter*/
printf("%ld\t",count);
/*newline after 50 numbers-may remove this later*/
if(count % NEWLINENO == 0){
    putchar('\n');
}
++count;
}while(count <BUFSIZ);
return count;
}

