### Fibonacci solution
This was an interesting challenge and I had plenty of fun working on it. My initial concern was the performance for large numbers and how big the numbers will get knowing how fast the number in the sequence increase.
PHP handles it super fast and I've quickly learned that once **n** is larger then 92 the result translates to floating point and finally once the floating gets too large the result simply becomes infinity (INF).
Knowing that I've decided to typecast the Fibonacci result as a string so it covers any case and I don't have to add any limits on what the user can input.

To keep it convenient you can build the app by simply running `make` this will install the dependencies and run a PHP server on localhost. This is for the optional part of the challenge to expose the endpoint. 
It is a GET endpoint and it expects **n** as a positive integer parameter:
`http://localhost:8000?n=5`

I've also added some happy path tests that you can simply run with `make test`.

To give you more information about my thought process I've also left comments in the code on some of my design decisions.
