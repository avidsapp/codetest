# Booj Code Test - Fun times with equilibrium indexes on an array.

## Equilibrium index

An equilibrium index of a sequence is an index into the sequence such that the sum of elements at lower indices is equal to the sum of elements at higher indices.

For example, in a sequence   **_A_**:

A[0] = − 7
A[1] = 1
A[2] = 5
A[3] = 2
A[4] = -4
A[5] = 3
A[6] = 0

3   is an equilibrium index, because:

A[0] + A[1] + A[2] = A[4] + A[5] + A[6]

6   is also an equilibrium index, because:

A[0] + A[1] + A[2] + A[4] + A[5] = 0
(sum of zero elements is zero)

## Notes

1. Refactored "PHPUnit_Framework_TestCase" for phpunit v6 namespaced change
2. Extra output was added for thoroughness

## Running the Test
```
phpunit EquilibriumIndexTest.php
```
