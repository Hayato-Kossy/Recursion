def charFrequency(message):
    return get_hashmap(message)

def get_hashmap(message):
    message = sorted(message.replace(" ", ""))
    hashmap = {}
    ans = []

    for word in message:
        if word not in hashmap: hashmap[word] = 1
        else: hashmap[word] += 1
    
    for key in hashmap:
        ans.append(str(key) + " : " + str(hashmap[key]))

    return ans