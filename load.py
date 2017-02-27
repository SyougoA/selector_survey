# coding: utf-8
import os
import sys
from sklearn.externals import joblib

def sk_selector(point, ff):
	# 配列で学習させているためこちらも配列に
	data = [[point, ff]]
	return clf.predict(data)

if __name__ == "__main__":
	#学習データまでのファイルパスを取得
	pklfile = os.getcwd() + '~~.pkl'
	print(pklfile)
	clf = joblib.load(pklfile)

	point = int(sys.argv[1])
	ff = int(sys.argv[2])
	print(sk_selector(point, ff))
