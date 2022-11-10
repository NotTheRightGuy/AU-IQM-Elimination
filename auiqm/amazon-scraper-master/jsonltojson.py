import json
import glob


with open('/Users/hardiksanghvi/Documents/GitHub/AU-IQM-Elimination/auiqm/amazon-scraper-master/search_output.jsonl', 'r') as json_file:
    json_list = list(json_file)

for json_str in json_list:
    result = json.loads(json_str)
    print(f"result: {result}")

    with open("sample.json", "a") as outfile:
        outfile.write(json_str+","+"\n")
    # print(isinstance(result, dict))
        outfile.close()
