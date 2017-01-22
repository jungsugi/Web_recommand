#!/usr/local/bin/python3.5

import sys
import pandas
import numpy as np
from sklearn.metrics.pairwise import cosine_similarity
from scipy.io import mmread
import random as rd
import warnings

warnings.filterwarnings("ignore", category=DeprecationWarning)

keyword_survey = list()
args = sys.argv[1:]
for i in args:
    keyword_survey.append(i)

#data import
rd.seed(10)

def visit_recommend_func(keyword_survey):
	pos_overview_set = pandas.read_csv("pos_overview_set.csv").values
	tfidf_matrix = mmread("tfidf_matrix.mtx")
	tfidf_matrix1 = mmread("tfidf_matrix1.mtx")
	cluster_labels = pandas.read_csv("cluster_labels.csv").values
	visit_name_real = pandas.read_csv("visit_name_real.csv").values
	visit_name = pandas.read_csv("visit_name.csv")

	#?¤ë¬¸ ???¤ë¬¸ ë°›ì? ?¤ì›Œ?œë? ë°”íƒ•?¼ë¡œ ?™ìŠµ?œí‚¨ ëª¨í˜•?ì„œ ?´ë–¤ ì£¼ì œ?¤ë¡œ ë¶„ë¥˜?˜ì—ˆ?”ì? ì¶”ì¶œ

	arr_count_keyword = np.array([keyword_survey.count(w[0]) for w in pos_overview_set])

	#?…ë ¥ë°›ì? keywordê°€ ?´ë–¤ ?´ëŸ¬?¤í„°???í•˜?”ì?
	determine_cluster_tmp = [(arr_count_keyword*i).sum() for i in tfidf_matrix1.toarray()]
	determine_cluster = determine_cluster_tmp.index(np.array(determine_cluster_tmp).max())

	#recommendation list
	cluster_labels = np.array([i[0] for i in cluster_labels])
	try:
		cos_sim = cosine_similarity(arr_count_keyword, tfidf_matrix.toarray()[np.where(cluster_labels==determine_cluster)])
		cos_sim_1 = cosine_similarity(arr_count_keyword, tfidf_matrix.toarray()[np.where(cluster_labels!=determine_cluster)])
	except DeprecationWarning as e:
		pass

	visit_1 = np.sort(cos_sim)[:,::-1][:, 0:4]

	recommend_visit_list = list()
	for i in visit_1[0]:
		recommend_visit_list.append(visit_name_real[np.where(cluster_labels==determine_cluster)][np.where(cos_sim == i)[1]][0])

	visit_2 = np.sort(cos_sim)[:,np.random.randint(low=4, high=len(cos_sim[0]), size=3)]
	for i in visit_2[0]:
		recommend_visit_list.append(visit_name_real[np.where(cluster_labels==determine_cluster)][np.where(cos_sim == i)[1]][0])

	visit_3 = np.sort(cos_sim_1)[:, ::-1][:, 0:3]
	for i in visit_3[0]:
		recommend_visit_list.append(visit_name_real[np.where(cluster_labels!=determine_cluster)][np.where(cos_sim_1 == i)[1]][0])

	vrl = [x[0] for x in recommend_visit_list]
	return vrl

print(visit_recommend_func(keyword_survey))
