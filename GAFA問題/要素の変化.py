def stepsToComeBack(inputArr):
    # 関数を完成させてください
    hashmap = make_hashmap(inputArr)
    result = []

    #stepを数えるtargetの決定
    for i in range(len(inputArr)):
        target = inputArr[i]
        #count_step関数を起動
        result.append(count_steps(hashmap,target,target))

    return result

#keyを数値、valueをインデックスとするhashmapを作成
def make_hashmap(numbers):
    hashmap = {}

    for index in range(len(numbers)):
        hashmap[numbers[index]] = index+1
    return hashmap

#ステップを数える関数
def count_steps(hashmap,target,key):
    cnt = 1

    while (hashmap[key] != target):
        key = hashmap[key]
        cnt += 1
    
    return cnt