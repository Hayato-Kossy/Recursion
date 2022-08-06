def arrayQueue(arr,num):
    return calculation(arr,num)

def make_hashmap(arr):
    hashmap = {}

    for index in range(len(arr)):
        hashmap[index+1] = arr[index]

    return hashmap            

def calculation(arr,num):
    result = []
    hashmap = make_hashmap(arr)
    order = 1

    while (len(result) != len(arr)):
        if hashmap[order] > 0 and hashmap[order] - num <= 0:
            result.append(order)
            hashmap[order] = 0
        else:
            hashmap[order] -= num
        
        order += 1
        if order > len(arr):
            order = 1

    return result