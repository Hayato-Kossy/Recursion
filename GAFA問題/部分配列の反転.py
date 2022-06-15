def areTheyEqual(target,arr):
    return make_hashmap(target) == make_hashmap(arr)

def make_hashmap(numbers):
    hashmap = {}

    for number in numbers:
        if number not in hashmap:
            hashmap[number] = 1
        else:
            hashmap[number] += 1
    
    return hashmap